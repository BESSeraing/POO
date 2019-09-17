<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 10/09/19
 * Time: 11:20
 */

class Troll extends Personnage
{

    public function __construct(string $name)
    {
        parent::__construct(Personnage::FORCE_HIGH,0, 0, $name);
    }

    public function hit(Personnage $victime) : void {
        $victime->receiveDamages(($this->force +2 ) * $this->xp);
        $this->xp ++;

    }

    public function receiveDamages(int $value) : void {
        $this->degats += ( $value +2 );
    }


    public function speak(string $message): void
    {
        echo '- <i>GRMLBMLBMLBE</i><br>';
    }
}