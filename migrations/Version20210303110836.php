<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210303110836 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE position (id INT AUTO_INCREMENT NOT NULL, position VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mood_board ADD position_id INT DEFAULT NULL, DROP position');
        $this->addSql('ALTER TABLE mood_board ADD CONSTRAINT FK_51D7155ADD842E46 FOREIGN KEY (position_id) REFERENCES position (id)');
        $this->addSql('CREATE INDEX IDX_51D7155ADD842E46 ON mood_board (position_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE mood_board DROP FOREIGN KEY FK_51D7155ADD842E46');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP INDEX IDX_51D7155ADD842E46 ON mood_board');
        $this->addSql('ALTER TABLE mood_board ADD position INT NOT NULL, DROP position_id');
    }
}
