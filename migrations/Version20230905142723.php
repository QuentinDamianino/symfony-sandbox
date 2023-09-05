<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230905142723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE route_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE route (id INT NOT NULL, transport_provider_id INT NOT NULL, start VARCHAR(255) NOT NULL, destination VARCHAR(255) NOT NULL, date DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_2C420799C3D4BAD ON route (transport_provider_id)');
        $this->addSql('ALTER TABLE route ADD CONSTRAINT FK_2C420799C3D4BAD FOREIGN KEY (transport_provider_id) REFERENCES transport_provider (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE route_id_seq CASCADE');
        $this->addSql('ALTER TABLE route DROP CONSTRAINT FK_2C420799C3D4BAD');
        $this->addSql('DROP TABLE route');
    }
}
