<?php

/**
 * Created by PhpStorm.
 * User: demo
 * Date: 21/09/17
 * Time: 13:50
 */
class PersonnageManager
{
    const TABLE_NAME = 'personnage';

    
    public function create(Personnage $personnage){
        $sth = DBConfig::getConnection()->prepare('INSERT INTO '.self::TABLE_NAME.' (`name`,`xp`,`damage`,`strength`) VALUES (:name,:xp,:damage,:strength)');
        $sth->execute([
            'name'=>$personnage->getName(),
            'xp'=>$personnage->getXp(),
            'damage'=>$personnage->getDamage(),
            'strength'=>$personnage->getStrength(),
        ]);
    }
    
    
    public function delete(Personnage $personnage){
        
    }
    public function update(Personnage $personnage){
        
    }
    
    public function findById($id){
        $sth = DBConfig::getConnection()->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE `id`=:id');
        $sth->execute(['id'=>$id]);
        $persoAsArray = $sth->fetch();
        $perso = new Personnage();
        $perso->hydrate($persoAsArray);
        return $perso;
    }

    /**
     * @return Personnage[]
     */
    public function findAll(){
        $personnageCollection = [];
        $sth = DBConfig::getConnection()->prepare('SELECT * FROM '.self::TABLE_NAME);
        $sth->execute();
        $persosAsArray =  $sth->fetchAll();
        foreach ($persosAsArray as $persoAsArray){
            $perso = new Personnage();
            $perso->hydrate($persoAsArray);
            $personnageCollection[] = $perso;
        }
        
        return $personnageCollection;
    }

}