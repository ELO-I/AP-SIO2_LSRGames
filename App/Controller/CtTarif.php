<?php 
require_once('App/DB/DBconnect.php');
function getTarif()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM Tarification");
    $TotalTarif = $ReponseBDD->fetchAll();
    return $TotalTarif;
}