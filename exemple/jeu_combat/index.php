<?php
function chargerClasse($className){
    try{
        include $className.'.php';
    }
    catch(Exception $exception){
        echo 'PHP ne connait pas la classe '.$className;
        throw $exception;
    }
}

spl_autoload_register('chargerClasse');

$persoManager = new PersoManager();


$perso1 = new Personnage(Personnage::FORCE_MOYENNE);
$perso2 = new Personnage(Personnage::FORCE_FORTE);

$persoManager->create($perso1);

echo 'nouveau perso avec l\'id '.$perso1->getId();

$perso2->frappe($perso1);
$persoManager->update($perso1);







//
//for($i=2;$i<1000;$i++){
//    $perso = new Personnage(Personnage::FORCE_FORTE);
//}
//
//
//$perso1->frappe($perso2);
//$perso1->frappe($perso2);
//$perso1->frappe($perso2);
//
//$perso1->frappe($perso2);
//$perso1->frappe($perso2);
//
//$perso2->frappe($perso1);
//
//echo Personnage::getNombreDInstance().' perso sont en bagarrr <br>';
//
//
//
//echo "Degats de perso 1: ".$perso1->getDegats().' <br>';
//echo "Degats de perso 2: ".$perso2->getDegats().' <br>';