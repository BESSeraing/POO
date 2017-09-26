<?php
function loadClass($class){
    require_once('Class/'.$class.'.php');
}

spl_autoload_register('loadClass');

$personnageManager = new PersonnageManager();

$mazlum = $personnageManager->findById(3);
$andre = $personnageManager->findById(2);

$mazlum->attack($andre);
$andre->attack($mazlum);


var_dump($mazlum);
var_dump($andre);
