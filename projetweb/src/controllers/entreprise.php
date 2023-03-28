<?php

require_once('src/modele/model.php');

function entreprise()
{
    $entrepriseParPage = 1;


    $nb_entreprises = getNbEntreprises();

    $nbpages = ceil($nb_entreprises / $entrepriseParPage);
    if ($_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {
        $pageCourante = (int) strip_tags($_GET['page']);
    } else {

        $pageCourante = 1;
    }

    $depart = ($pageCourante * $entrepriseParPage) - $entrepriseParPage;
    $allentreprise = getAllEntreprises($depart, $entrepriseParPage); //Condition page numero 2 je met l'entreprise 5 a 9 
    require('src/view/entreprise.php');
}
