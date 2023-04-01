<?php

require_once('src/modele/model.php');

function pilote()
{
    session_start();
    $piloteParPage = 1;//nombre de pilote par page
    $nb_pilotes = getNbPilote();//nombre de pilote

    $nbpages = ceil($nb_pilotes / $piloteParPage);//nombre de pages
    if (isset(($_GET['page'])) && $_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {//si la page est supérieur ou égale à 1 et inférieur ou égale au nombre de pages
        $pageCourante = (int) strip_tags($_GET['page']);//page courante
    } else {

        $pageCourante = 1;//par défaut la page courante = 1
    }

    $depart = ($pageCourante * $piloteParPage) - $piloteParPage;//nombre de pilote à afficher
    $allpilote = getAllPilote($depart, $piloteParPage);//tous les pilotes

    require('src/view/pilote.php');
}
function rechercherPilotes(string $search)//fonction de recherche pilote
{

    $spilotes = searchPilotes($search);
    require('src/view/searchpilote.php');
}