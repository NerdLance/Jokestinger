<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220320220723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX origin_id ON jokes');
        $this->addSql('ALTER TABLE ratings ADD joke_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments CHANGE joke_origin_id joke_origin_id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE comment comment LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE jokes CHANGE origin_id origin_id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE joke joke LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE UNIQUE INDEX origin_id ON jokes (origin_id)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE ratings DROP joke_id, CHANGE joke_origin_id joke_origin_id VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
