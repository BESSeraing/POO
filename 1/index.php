<?php

require "Class/Personnage.php";

$perso = new Personnage('Mazlum',0,10);
$perso2 = new Personnage('André',10);

// Commenté, maintenant les parametres ont une valeur par defaut et 
// Le nom est passé au constructeur.
//$perso
//    ->setName('Mazlum')
//    ->setDamage(0)
//    ->setXp(0)
//;
//$perso2
//    ->setName("Joe")
//    ->setDamage(0)
//    ->setXp(0)
//;


$perso->attack($perso2);
$perso->attack($perso2);
$perso->attack($perso2);
$perso->attack($perso2);
echo $perso2->getDamage();

