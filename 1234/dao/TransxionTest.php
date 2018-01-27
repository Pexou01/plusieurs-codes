<?php

/*
 * TransaxionTest.php
 */

require_once 'Connexion.php';
require_once '../Cv.php';
$lcnx = seConnecter("cv.ini");


try {
    $valide = filter_input(INPUT_POST, 'valide');
if ($valide!=NULL){
    initialiser($lcnx);
    $exc = 'nul';
    $nom = filter_input(INPUT_POST, 'nom');
    $prenom = filter_input(INPUT_POST, 'prenom');
    $adresse = filter_input(INPUT_POST, 'adresse');
    $cp = filter_input(INPUT_POST, 'cp');
    $ville = filter_input(INPUT_POST, 'ville');
    $email = filter_input(INPUT_POST, 'mail');
    $lsSQL = "INSERT INTO utilisateurs(Nom, Prenom, Adresse, Cp, Ville, email) VALUES(?,?,?,?,?,?)";

    $lcmd = $lcnx->prepare($lsSQL);
           
    $lcmd->bindParam(1, $nom);
    $lcmd->bindParam(2, $prenom);
    $lcmd->bindParam(3, $adresse);
    $lcmd->bindParam(4, $cp);
    $lcmd->bindParam(5, $ville);
    $lcmd->bindParam(6, $email);
        $lcmd->execute();

    valider($lcnx);
}
}catch (Exception $exc) {
    echo $exc->getMessage();
    annuler($lcnx);
}
seDeconnecter($lcnx);
?>