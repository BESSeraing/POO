<?php

function loadClass($class){
    require_once('Class/'.$class.'.php');
}

spl_autoload_register('loadClass');

$personnageManager = new PersonnageManager();

$perso = new Wizzard('Jona');
//$personnageManager->create($perso);

$perso->getType();


var_dump($personnageManager instanceof AbstractManager);

var_dump($perso->getType());
var_dump($perso);


//$mazlum = $personnageManager->findById(3);
//$andre = $personnageManager->findById(2);
//
//$mazlum->attack($andre);
//$andre->attack($mazlum);
//
//$karl = $andre;
//$andre->setName('Naima');
//echo $karl->getName();
//
//
//var_dump($mazlum);
//var_dump($andre);
