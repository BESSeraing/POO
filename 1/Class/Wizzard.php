<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 26/09/17
 * Time: 11:19
 */

class Wizzard extends Personnage
{
    const PERSONNAGE_TYPE = 'Wizzard';
    
    public function __construct($name = null, $strength = self::LOW_STRENGTH, $xp = 0, $damage = 0)
    {
        parent::__construct($name, $strength, $xp, $damage);
    }

    public function increaseDamage()
    {
        $this->damage += 2;
    }
   


}