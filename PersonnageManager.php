<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 12/09/19
 * Time: 11:21
 */

class PersonnageManager
{

    private const TABLE_NAME = "personnage";

    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function save(Personnage $personnage){
        $statement = $this->pdo->prepare("INSERT INTO `" . self::TABLE_NAME . "` (`xp`,`degats`,`force`,`name`) VALUES (:xp, :degats, :force, :name)");
        $statement->bindValue('xp', $personnage->getXp());
        $statement->bindValue('degats', $personnage->getDegats());
        $statement->bindValue('force', $personnage->getForce());
        $statement->bindValue('name', $personnage->getName());
        $statement->execute();

        $personnage->setId($this->pdo->lastInsertId());
    }

    // Ecrire la methode d'update

}