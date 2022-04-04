<?php

namespace App\Repository;

use App\Entity\Utilisateur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Utilisateur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Utilisateur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Utilisateur[]    findAll()
 * @method Utilisateur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UtilisateurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Utilisateur::class);
    }

    // /**
    //  * @return Utilisateur[] Returns an array of Utilisateur objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Utilisateur
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    
    public function cadurciens() {
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u FROM App\Entity\Utilisateur u
        WHERE u.ville = :laVille");
        $query->setParameter('laVille', "Cahors");
        return $query->getArrayResult(); // Utilisation de getSingleResult car un seul résultat
        }
        
    public function ayantFrais(){
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u.nom, u.prenom,sum(ff.montantvalide) AS montant FROM App\Entity\Utilisateur u
                INNER JOIN App\Entity\Fichefrais ff
                WITH ff.idutilisateur = u.id
                GROUP BY u.id");
        return $query->getArrayResult();
    }
    
    public function sansFrais(){    
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u.nom, u.prenom FROM App\Entity\Utilisateur u
                LEFT OUTER JOIN App\Entity\Fichefrais ff
                WITH ff.idutilisateur = u.id
                WHERE ff.montantvalide IS NULL");
        
        return $query->getArrayResult();
    }
    
    public function nombreFrais(){    
        $em = $this->getEntityManager();
        $query = $em->createQuery("SELECT u.nom, u.prenom, count(ff.id) AS nbfrais FROM App\Entity\Utilisateur u
                LEFT OUTER JOIN App\Entity\Fichefrais ff
                WITH ff.idutilisateur = u.id GROUP BY u.id");
        return $query->getArrayResult();
    }
    
}
