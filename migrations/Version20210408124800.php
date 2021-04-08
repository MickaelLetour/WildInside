<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210408124800 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE image DROP FOREIGN KEY FK_C53D045FADA9CECE');
        $this->addSql('DROP TABLE position');
        $this->addSql('DROP INDEX IDX_C53D045FADA9CECE ON image');
        $this->addSql('ALTER TABLE image ADD moodboard INT NOT NULL, DROP moodboard_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE position (id INT AUTO_INCREMENT NOT NULL, position VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE image ADD moodboard_id INT DEFAULT NULL, DROP moodboard');
        $this->addSql('ALTER TABLE image ADD CONSTRAINT FK_C53D045FADA9CECE FOREIGN KEY (moodboard_id) REFERENCES position (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_C53D045FADA9CECE ON image (moodboard_id)');
    }
}
