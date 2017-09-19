<?php

/**
 * Created by PhpStorm.
 * User: demo
 * Date: 19/09/17
 * Time: 9:46
 */
class Personnage
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $xp = 0;
    
    /**
     * @var integer
     */
    private $damage = 0;

    /**
     * Personnage constructor.
     * @param string $name
     * @param int $xp
     * @param int $damage
     */
    public function __construct($name, $xp = 0, $damage = 0)
    {
        $this->name = $name;
        $this->xp = $xp;
        $this->damage = $damage;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): Personnage
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getXp(): int
    {
        return $this->xp;
    }

    /**
     * @param int $xp
     * @return Personnage
     */
    public function setXp(int $xp): Personnage
    {
        $this->xp = $xp;
        return $this;
    }

    /**
     * @return int
     */
    public function getDamage(): int
    {
        return $this->damage;
    }

    /**
     * @param int $damage
     * @return Personnage
     */
    public function setDamage(int $damage): Personnage
    {
        $this->damage = $damage;
        return $this;
    }
    
    public function increaseDamage(){
        $this->damage +=5;
    }
    
    
    public function attack(Personnage $target){
        $target->increaseDamage();
    }

    
    
    
    
    
    
    

}