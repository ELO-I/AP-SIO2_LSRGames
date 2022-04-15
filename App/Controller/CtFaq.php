<?php 
require_once('App/DB/DBconnect.php');
function getFaq()
{
    $DepuisModele = new modele;
    $ReponseBDD = $DepuisModele->executerRequete("SELECT * FROM faq");
    $TotalFaq = $ReponseBDD->fetchAll();
    return $TotalFaq;
}