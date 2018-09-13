<?php

/**
 * Created by PhpStorm.
 * User: demo
 * Date: 13/09/18
 * Time: 11:51
 */
class PersoManager
{
    /**
     * @var PDO
     */
    private $pdo;
    
    const DB_NAME = "poo";
    
    const TABLE_NAME = "perso";
    
    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=127.0.0.1;port=3307;dbname='.self::DB_NAME,'root','root');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
    }

    public function create(Personnage $personnage){
        $req = 'INSERT INTO '.self::TABLE_NAME.' (`force`,`xp`,`degat`) VALUES (:force,:xp,:degat)';
        
        $pdoReq = $this->pdo->prepare($req);
        $pdoReq->execute([
           'force'=>$personnage->getForce(), 
           'xp'=>$personnage->getXp(), 
           'degat'=>$personnage->getDegat()
        ]);
        
        $personnage->setId($this->pdo->lastInsertId());
    }   
    
    public function update(Personnage $personnage){
        $req = 'UPDATE '.self::TABLE_NAME.' SET `force` = :force,`xp` = :xp,`degat`= :degat WHERE id = :id';

        $pdoReq = $this->pdo->prepare($req);
        $pdoReq->execute([
            'id'=>$personnage->getId(),
            'force'=>$personnage->getForce(),
            'xp'=>$personnage->getXp(),
            'degat'=>$personnage->getDegat()
        ]);
    }

    /**
     * @param int $id
     * @return Personnage
     */
    public function get(int $id) : Personnage{
        
    }

    
    public function delete(int $id) : void {
        
    }

}