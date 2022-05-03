<?php 
require_once('App/DB/DBconnect.php');
function getInfo()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM information");
    $ListeDesInfo = $ReponseBDD->fetch();
    return $ListeDesInfo;
}