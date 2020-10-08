<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200808111302 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE category_problematic (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, language VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, published DATETIME NOT NULL, wording VARCHAR(255) NOT NULL, anonymous INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mention (id INT AUTO_INCREMENT NOT NULL, wording_id INT NOT NULL, state_id INT NOT NULL, state INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, content LONGTEXT NOT NULL, etat INT NOT NULL, updated DATETIME NOT NULL, anonymous INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE private_message (id INT AUTO_INCREMENT NOT NULL, content VARCHAR(255) NOT NULL, published DATETIME NOT NULL, transmitter_id INT NOT NULL, receiver_id INT NOT NULL, transmitter_anonymous INT NOT NULL, receiveranonymous INT NOT NULL, read_mention INT NOT NULL, read_date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE problematic (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, language VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE public_message (id INT AUTO_INCREMENT NOT NULL, published DATETIME NOT NULL, wording VARCHAR(255) NOT NULL, state INT NOT NULL, anonymous INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE public_message_picture (id INT AUTO_INCREMENT NOT NULL, wording VARCHAR(255) NOT NULL, extension VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birthday DATE NOT NULL, sex VARCHAR(1) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, lang VARCHAR(255) NOT NULL, state INT NOT NULL, country VARCHAR(255) NOT NULL, town VARCHAR(255) NOT NULL, online INT NOT NULL, active INT NOT NULL, activation_code VARCHAR(255) NOT NULL, key_push VARCHAR(255) NOT NULL, token_user VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE category_problematic');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE mention');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE private_message');
        $this->addSql('DROP TABLE problematic');
        $this->addSql('DROP TABLE public_message');
        $this->addSql('DROP TABLE public_message_picture');
        $this->addSql('DROP TABLE user');
    }
}
