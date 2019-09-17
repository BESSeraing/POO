<?php

function loadClass($className) {
    require_once $className . ".php";
}
spl_autoload_register("loadClass");

$dbConnexion = new PDOConnection("127.0.0.1","3306","root", "root", "poo_19_20");
$personnageManager = new PersonnageManager($dbConnexion->getPdo());



$billy = new Wizard("Billy");
$bob = new Troll("Bob");


$billy->hit($bob);
$bob->hit($billy);
$bob->hit($billy);
$bob->hit($billy);
$bob->hit($billy);
$billy->hit($bob);
$billy->hit($bob);
$bob->speak("haaaaa");
$billy->speak("héhéhé");

$personnageManager->save($billy);
$personnageManager->save($bob);
