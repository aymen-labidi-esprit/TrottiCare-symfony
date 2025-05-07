<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250430144513 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE maintenance CHANGE statut statut ENUM('EN_COURS','TERMINEE','ANNULEE')
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation CHANGE id_trottinette id_trottinette INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE utilisateurs ADD details LONGTEXT DEFAULT NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE maintenance CHANGE statut statut VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE utilisateurs DROP details
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation CHANGE id_trottinette id_trottinette INT DEFAULT NULL
        SQL);
    }
}
