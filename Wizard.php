<?php
/**
 * Created by PhpStorm.
 * User: demo
 * Date: 10/09/19
 * Time: 11:20
 */

class Wizard extends Personnage
{

    public function __construct(string $name) {
        parent::__construct(Personnage::FORCE_LOW, 1, 0, $name);
    }

    public function hit(Personnage $victime) : void {
        $victime->receiveDamages($this->force * $this->xp);
        $this->xp ++;
        $this->xp ++;
    }

    public function receiveDamages(int $value) : void {
        $this->degats += ( $value /2 );
    }

    public function speak(string $message): void
    {
        echo '- <i>'.strtoupper($message).'</i><br>';
    }
}