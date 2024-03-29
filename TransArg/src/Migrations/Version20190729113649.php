<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190729113649 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE compte CHANGE partenaire_id partenaire_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE depot CHANGE partenaire_id partenaire_id INT DEFAULT NULL, CHANGE date date DATETIME NOT NULL');
        $this->addSql('ALTER TABLE transaction CHANGE user_id user_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE compte CHANGE partenaire_id partenaire_id INT NOT NULL');
        $this->addSql('ALTER TABLE depot CHANGE partenaire_id partenaire_id INT NOT NULL, CHANGE date date DATE NOT NULL');
        $this->addSql('ALTER TABLE transaction CHANGE user_id user_id INT NOT NULL');
    }
}
