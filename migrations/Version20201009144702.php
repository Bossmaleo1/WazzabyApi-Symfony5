<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201009144702 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE public_message ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE public_message ADD CONSTRAINT FK_ED636FCDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_ED636FCDA76ED395 ON public_message (user_id)');
        $this->addSql('ALTER TABLE public_message_picture ADD public_message_id INT NOT NULL');
        $this->addSql('ALTER TABLE public_message_picture ADD CONSTRAINT FK_A0EABE84C9E88744 FOREIGN KEY (public_message_id) REFERENCES public_message (id)');
        $this->addSql('CREATE INDEX IDX_A0EABE84C9E88744 ON public_message_picture (public_message_id)');
        $this->addSql('ALTER TABLE user ADD photo VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE public_message DROP FOREIGN KEY FK_ED636FCDA76ED395');
        $this->addSql('DROP INDEX IDX_ED636FCDA76ED395 ON public_message');
        $this->addSql('ALTER TABLE public_message DROP user_id');
        $this->addSql('ALTER TABLE public_message_picture DROP FOREIGN KEY FK_A0EABE84C9E88744');
        $this->addSql('DROP INDEX IDX_A0EABE84C9E88744 ON public_message_picture');
        $this->addSql('ALTER TABLE public_message_picture DROP public_message_id');
        $this->addSql('ALTER TABLE user DROP photo');
    }
}
