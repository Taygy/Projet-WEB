<?php

require_once('src/modele/model.php');

function offre()
{
    $offreParPage = 3; //Definit le nombre d'elements dans une page: 

    $nb_offres = getNbOffres();

    $nbpages = ceil($nb_offres / $offreParPage);
    if (isset(($_GET['page'])) && $_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {
        $pageCourante = (int) strip_tags($_GET['page']);
    } else {

        $pageCourante = 1;
    }

    $depart = ($pageCourante * $offreParPage) - $offreParPage;
    $alloffre = getAllOffre($depart, $offreParPage); 
    require('src/view/offre.php');
}
function rechercherOffres(string $search)
{

    $soffres = searchOffre($search);
    require('src/view/searchoffre.php');
}