<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220325075908 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE domaine (id INT AUTO_INCREMENT NOT NULL, nomdomaine VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE domaine_categorie (domaine_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_5FA678F44272FC9F (domaine_id), INDEX IDX_5FA678F4BCF5E72D (categorie_id), PRIMARY KEY(domaine_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE domaine_categorie ADD CONSTRAINT FK_5FA678F44272FC9F FOREIGN KEY (domaine_id) REFERENCES domaine (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE domaine_categorie ADD CONSTRAINT FK_5FA678F4BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE domaine_categorie DROP FOREIGN KEY FK_5FA678F44272FC9F');
        $this->addSql('DROP TABLE domaine');
        $this->addSql('DROP TABLE domaine_categorie');
        $this->addSql('ALTER TABLE categorie CHANGE libelle_categorie libelle_categorie VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE etat CHANGE id id CHAR(2) NOT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE libelle libelle VARCHAR(30) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`');
        $this->addSql('ALTER TABLE fichefrais CHANGE mois mois CHAR(6) NOT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE idEtat idEtat CHAR(2) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE idUtilisateur idUtilisateur CHAR(4) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`');
        $this->addSql('ALTER TABLE fraisforfait CHANGE id id CHAR(3) NOT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE libelle libelle CHAR(20) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`');
        $this->addSql('ALTER TABLE lignefraisforfait CHANGE idFraisForfait idFraisForfait CHAR(3) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`');
        $this->addSql('ALTER TABLE lignefraishorsforfait CHANGE libelle libelle VARCHAR(100) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE id id CHAR(4) NOT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE nom nom CHAR(30) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE prenom prenom CHAR(30) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE adresse adresse CHAR(30) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE cp cp CHAR(5) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`, CHANGE ville ville CHAR(30) DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci`');
    }
}
