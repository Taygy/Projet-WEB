<?php

require_once('src/modele/model.php');

function offre()
{
    session_start();
    $offreParPage = 3; //Definit le nombre d'elements dans une page: 

    $nb_offres = getNbOffres();//Recupere le nombre d'offres

    $nbpages = ceil($nb_offres / $offreParPage);//Calcule le nombre de pages
    if (isset(($_GET['page'])) && $_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {
        $pageCourante = (int) strip_tags($_GET['page']);//Recupere la page courante
    } else {

        $pageCourante = 1;
    }

    $depart = ($pageCourante * $offreParPage) - $offreParPage;//Calcule le nombre d'offres a afficher
    $alloffre = getAllOffre($depart, $offreParPage); //Recupere les offres a afficher
    require('src/view/offre.php');
}
function rechercherOffres(string $search)//fonction de recherche d'offre
{

    $soffres = searchOffre($search);
    require('src/view/searchoffre.php');
}