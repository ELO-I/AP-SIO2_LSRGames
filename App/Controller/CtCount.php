<?php
require_once('App/DB/DBconnect.php');
function getpartiejoue()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT COUNT(*) as parties FROM Partie");
    $TotalPartiejoue = $ReponseBDD->fetch();;
    return $TotalPartiejoue;
}

function getjoueurtotal()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT COUNT(idJoueur) as joueurs FROM Joueur");
    $TotalJoueurtotal = $ReponseBDD->fetch();
    return $TotalJoueurtotal;
}


function getequipegagnante()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT count(idPartie) as equipe FROM Partie WHERE resultat = 'True'");
    $TotalEquipegagnante = $ReponseBDD->fetch();
    return $TotalEquipegagnante;
}

function gettabletteutilise()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT sum(nbTablettes) as tablettes FROM Partie");
    $TotalTabletutilise = $ReponseBDD->fetch();
    return $TotalTabletutilise;
}
