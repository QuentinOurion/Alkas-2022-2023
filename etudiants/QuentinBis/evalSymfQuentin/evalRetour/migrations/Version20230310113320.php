<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310113320 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page ADD categorie_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB620BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE page ADD CONSTRAINT FK_140AB620A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_140AB620BCF5E72D ON page (categorie_id)');
        $this->addSql('CREATE INDEX IDX_140AB620A76ED395 ON page (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB620BCF5E72D');
        $this->addSql('ALTER TABLE page DROP FOREIGN KEY FK_140AB620A76ED395');
        $this->addSql('DROP INDEX IDX_140AB620BCF5E72D ON page');
        $this->addSql('DROP INDEX IDX_140AB620A76ED395 ON page');
        $this->addSql('ALTER TABLE page DROP categorie_id, DROP user_id');
    }
}
