<?php
require_once('App/DB/DBconnect.php');
// Fonction qui va chercher la liste des salles pour les afficher 
function getPays()
{
        $DepuisModele = new modele();
        $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM pays");
        $Listepays = $ReponseBDD->fetchAll();
        return $Listepays;
}
