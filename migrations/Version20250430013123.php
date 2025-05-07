<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250430013123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT NOT NULL, message LONGTEXT NOT NULL, date_reponse DATETIME NOT NULL, user_type VARCHAR(255) NOT NULL, INDEX IDX_5FB6DEC72D6BA2D9 (reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse_reclamation DROP FOREIGN KEY FK_C7CB51012D6BA2D9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse_reclamation DROP FOREIGN KEY FK_C7CB510160BB6FE6
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reponse_reclamation
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE maintenance CHANGE statut statut ENUM('EN_COURS','TERMINEE','ANNULEE')
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation DROP id_trottinette
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE reponse_reclamation (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT NOT NULL, auteur_id INT NOT NULL, message LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, date_reponse DATETIME NOT NULL, INDEX IDX_C7CB51012D6BA2D9 (reclamation_id), INDEX IDX_C7CB510160BB6FE6 (auteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = '' 
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse_reclamation ADD CONSTRAINT FK_C7CB51012D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse_reclamation ADD CONSTRAINT FK_C7CB510160BB6FE6 FOREIGN KEY (auteur_id) REFERENCES utilisateurs (id) ON UPDATE NO ACTION ON DELETE NO ACTION
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC72D6BA2D9
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE reponse
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reclamation ADD id_trottinette INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE maintenance CHANGE statut statut VARCHAR(255) DEFAULT NULL
        SQL);
    }
}
