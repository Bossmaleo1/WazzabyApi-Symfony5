<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201009135026 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_problematic ADD icon VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comment ADD content LONGTEXT NOT NULL, ADD published1 DATETIME NOT NULL');
        $this->addSql('ALTER TABLE private_message DROP transmitter_id, DROP receiver_id');
        $this->addSql('ALTER TABLE problematic ADD category_id INT NOT NULL, ADD icon VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE problematic ADD CONSTRAINT FK_B366E46B12469DE2 FOREIGN KEY (category_id) REFERENCES category_problematic (id)');
        $this->addSql('CREATE INDEX IDX_B366E46B12469DE2 ON problematic (category_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE category_problematic DROP icon');
        $this->addSql('ALTER TABLE comment DROP content, DROP published1');
        $this->addSql('ALTER TABLE private_message ADD transmitter_id INT NOT NULL, ADD receiver_id INT NOT NULL');
        $this->addSql('ALTER TABLE problematic DROP FOREIGN KEY FK_B366E46B12469DE2');
        $this->addSql('DROP INDEX IDX_B366E46B12469DE2 ON problematic');
        $this->addSql('ALTER TABLE problematic DROP category_id, DROP icon');
    }
}
