<?php

include '../helper/functions.php';

$idprod= postVar("idprod");
$libelle = postVar("libelle");
$prix = postVar("prix");
$etat = postVar('etat');
$description = postVar('description');
$photo = postVar('photo');
$tailleecran = postVar('tailleecran');
$connectivite = postVar('connectivite');
$stockagememoire = postVar('stockagememoire');
$couleur = postVar('couleur');
$systemexploit = postVar('systemexploit');
$dispo = 0;
$vendu = 0;
$idtype = postVar('idtype');
$iduser = postVar('iduser');
$idmarque = postVar('idmarque');

$id = addTelephone($idprod, $libelle, $prix, $etat, $description, $photo, $tailleecran, $connectivite, $stockagememoire, $couleur, $systemexploit, $dispo, $vendu, $idtype,
    $iduser, $idmarque);