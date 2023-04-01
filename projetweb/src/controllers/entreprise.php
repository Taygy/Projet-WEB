<?php

require_once('src/modele/model.php');

function entreprise()
{
    session_start();
    $entrepriseParPage = 2;//On définit le nombre d'entreprise par page
    $nb_entreprises = getNbEntreprises();//On récupère le nombre d'entreprise
    $nbpages = ceil($nb_entreprises / $entrepriseParPage);//On calcule le nombre de pages
    if (isset(($_GET['page'])) && $_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {//Si la page est supérieur ou égale à 1 et inférieur ou égale au nombre de pages
        $pageCourante = (int) strip_tags($_GET['page']);
    } else {

        $pageCourante = 1;
    }

    $depart = ($pageCourante * $entrepriseParPage) - $entrepriseParPage;
    $allentreprise = getAllEntreprises($depart, $entrepriseParPage);
    require('src/view/entreprise.php');
}
function rechercheEntreprise(string $search)
{
    session_start();
    $sentreprises = searchEntreprises($search);
    require('src/view/searchentreprise.php');
}