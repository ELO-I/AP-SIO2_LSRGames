<?php
require_once('App/DB/DBconnect.php');
function getAvis()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM avis");
    $TotalAvis = $ReponseBDD->fetchAll();
    return $TotalAvis;
}
