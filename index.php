<?php

function loadClass($className) {
    require_once $className . ".php";
}
spl_autoload_register("loadClass");

$dbConnexion = new PDOConnection("127.0.0.1","3306","root", "root", "poo_19_20");
$personnageManager = new PersonnageManager($dbConnexion->getPdo());


$perso1 = new Personnage(Personnage::FORCE_HIGH, 1, 0, "Billy" );
$perso2 = new Personnage(Personnage::FORCE_MEDIUM, 1, 0, "Tartempion");


$perso1->hit($perso2);
$perso2->hit($perso1);
$perso2->hit($perso1);
$perso2->hit($perso1);
$perso2->hit($perso1);

$personnageManager->save($perso1);
$personnageManager->save($perso2);
