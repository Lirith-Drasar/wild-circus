<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200130145151 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE shows_city (shows_id INT NOT NULL, city_id INT NOT NULL, INDEX IDX_2A1D3BEAD7ED998 (shows_id), INDEX IDX_2A1D3BE8BAC62AF (city_id), PRIMARY KEY(shows_id, city_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE shows_performance (shows_id INT NOT NULL, performance_id INT NOT NULL, INDEX IDX_8D061B23AD7ED998 (shows_id), INDEX IDX_8D061B23B91ADEEE (performance_id), PRIMARY KEY(shows_id, performance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE performance (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE circassian (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE circassian_performance (circassian_id INT NOT NULL, performance_id INT NOT NULL, INDEX IDX_787A9AC4E83FA795 (circassian_id), INDEX IDX_787A9AC4B91ADEEE (performance_id), PRIMARY KEY(circassian_id, performance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE shows_city ADD CONSTRAINT FK_2A1D3BEAD7ED998 FOREIGN KEY (shows_id) REFERENCES shows (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shows_city ADD CONSTRAINT FK_2A1D3BE8BAC62AF FOREIGN KEY (city_id) REFERENCES city (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shows_performance ADD CONSTRAINT FK_8D061B23AD7ED998 FOREIGN KEY (shows_id) REFERENCES shows (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE shows_performance ADD CONSTRAINT FK_8D061B23B91ADEEE FOREIGN KEY (performance_id) REFERENCES performance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE circassian_performance ADD CONSTRAINT FK_787A9AC4E83FA795 FOREIGN KEY (circassian_id) REFERENCES circassian (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE circassian_performance ADD CONSTRAINT FK_787A9AC4B91ADEEE FOREIGN KEY (performance_id) REFERENCES performance (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE shows_performance DROP FOREIGN KEY FK_8D061B23B91ADEEE');
        $this->addSql('ALTER TABLE circassian_performance DROP FOREIGN KEY FK_787A9AC4B91ADEEE');
        $this->addSql('ALTER TABLE circassian_performance DROP FOREIGN KEY FK_787A9AC4E83FA795');
        $this->addSql('DROP TABLE shows_city');
        $this->addSql('DROP TABLE shows_performance');
        $this->addSql('DROP TABLE performance');
        $this->addSql('DROP TABLE circassian');
        $this->addSql('DROP TABLE circassian_performance');
    }
}
