<?php
function loadClass($class){
    require_once('Class/'.$class.'.php');
}

spl_autoload_register('loadClass');

$personnageManager = new PersonnageManager();

$perso = new Personnage('Mazlum',Personnage::LOW_STRENGTH,0,10);
$personnageManager->create($perso);

$perso2 = new Personnage('André',Personnage::HIGH_STRENGTH,10);
$personnageManager->create($perso2);


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

//echo $perso2->getDamage();
echo Personnage::$instanceNumber;

