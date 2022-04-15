<?php
require_once('App/DB/DBconnect.php');

function getSalle()
{
        $DepuisModele = new modele();
        $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM Salle");
        $Listesalle = $ReponseBDD->fetchAll();
        return $Listesalle;
}