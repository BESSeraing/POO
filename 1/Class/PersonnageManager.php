<?php

/**
 * Created by PhpStorm.
 * User: demo
 * Date: 21/09/17
 * Time: 13:50
 */
class PersonnageManager implements ManagerInterface
{

    const TABLE_NAME = 'personnage';

    /**
     * @param Personnage $personnage
     */
    public function create($personnage)
    {
        $sth = DBConfig::getConnection()->prepare('INSERT INTO '.self::TABLE_NAME.' (`name`,`xp`,`damage`,`strength`,`type`) VALUES (:name,:xp,:damage,:strength,:type)');
        $sth->execute([
            'name'=>$personnage->getName(),
            'xp'=>$personnage->getXp(),
            'damage'=>$personnage->getDamage(),
            'strength'=>$personnage->getStrength(),
            'type'=>$personnage->getType(),
        ]);
        
        $personnage->setId(DBConfig::getConnection()->lastInsertId());
    }

    /**
     * @param Personnage $personnage
     */
    public function update($personnage)
    {
        // TODO: Implement update() method.
    }

    /**
     * @param Personnage $personnage 
     */
    public function delete($personnage)
    {
        // TODO: Implement delete() method.
    }

    /**
     * @param $id
     * @return Personnage
     */
    public function findById($id)
    {
        $sth = DBConfig::getConnection()->prepare('SELECT * FROM '.self::TABLE_NAME.' WHERE `id`=:id');
        $sth->execute(['id'=>$id]);
        $persoAsArray = $sth->fetch();
        $perso = new $persoAsArray['type'];
        $perso->hydrate($persoAsArray);
        return $perso;
    }

    /**
     * @return Personnage[]
     */
    public function findAll()
    {
        $personnageCollection = [];
        $sth = DBConfig::getConnection()->prepare('SELECT * FROM '.self::TABLE_NAME);
        $sth->execute();
        $persosAsArray =  $sth->fetchAll();
        foreach ($persosAsArray as $persoAsArray){
            $perso = new $persoAsArray['type'];
            $perso->hydrate($persoAsArray);
            $personnageCollection[] = $perso;
        }

        return $personnageCollection;
    }

}