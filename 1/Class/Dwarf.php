<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 26/09/17
 * Time: 11:44
 */

class Dwarf extends Personnage
{

    const PERSONNAGE_TYPE = 'Dwarf';
    
    
    public function increaseDamage()
    {
        $this->damage ++;
    }

}