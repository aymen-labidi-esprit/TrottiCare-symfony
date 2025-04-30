#!/usr/bin/env node
/**
 * robust-md-to-files.js
 *
 * Usage: node robust-md-to-files.js input.md
 *
 * Walks through the Markdown line-by-line:
 *   1. finds a line with a back-ticked path
 *   2. grabs the next fenced code block
 *   3. writes it to export/<timestamp>-<rand>/<that path>
 *
 * Handles:
 *   • bold/italic or text around the path
 *   • blank lines
 *   • Unix or Windows endings
 */

const fs = require('fs').promises;
const path = require('path');
const crypto = require('crypto');

async function main() {
    const [, , infile] = process.argv;
    if (!infile) {
        console.error('Usage: node robust-md-to-files.js <input.md>');
        process.exit(1);
    }

    // 1. read the whole MD file
    const md = await fs.readFile(infile, 'utf8');
    const lines = md.split(/\r?\n/);

    // 2. prep the export folder
    const outBase = path.join(
        process.cwd(),
        'export',
        `${Date.now()}-${crypto.randomBytes(4).toString('hex')}`
    );
    await fs.mkdir(outBase, { recursive: true });
    console.log(`→ Export folder: ${outBase}\n`);

    // 3. walk the MD
    let i = 0,
        written = 0;
    while (i < lines.length) {
        const pathMatch = lines[i].match(/`([^`]+)`/); // anything inside one pair of back-ticks
        if (!pathMatch) {
            i++;
            continue;
        }

        // found a candidate path line
        const relPath = pathMatch[1].trim();
        // advance to the next line that starts a fenced code block
        i++;
        while (i < lines.length && !/^\s*```/.test(lines[i])) i++;

        if (i >= lines.length) break; // no code fence found

        const fenceLine = lines[i];
        const fenceLang = fenceLine.replace(/^\s*```/, '').trim(); // optional language
        const codeStart = ++i;
        // find closing fence
        while (i < lines.length && !/^\s*```/.test(lines[i])) i++;
        const codeEnd = i;

        if (codeEnd >= lines.length) {
            console.warn(`⚠️  No closing \`\`\` for code block after ${relPath}`);
            break;
        }

        const code = lines.slice(codeStart, codeEnd).join('\n');

        // 4. write the file
        const outPath = path.join(outBase, relPath);
        await fs.mkdir(path.dirname(outPath), { recursive: true });
        await fs.writeFile(outPath, code, 'utf8');
        console.log(`✔ ${relPath}  (${codeEnd - codeStart} lines${fenceLang ? `, lang=${fenceLang}` : ''})`);
        written++;

        // move past closing fence
        i++;
    }

    if (!written) {
        console.warn('\n⚠️  No paths + code blocks found. Make sure each code sample is preceded');
        console.warn('   by a line that contains a back-ticked path, e.g.');
        console.warn('      **1. `templates/base.html.twig` (Base Layout)**');
    } else {
        console.log(`\n✅  Done – ${written} file${written > 1 ? 's' : ''} written.`);
    }
}

main().catch(err => {
    console.error(err);
    process.exit(1);
});
