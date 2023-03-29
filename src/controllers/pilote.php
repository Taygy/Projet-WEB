<?php

require_once('src/modele/model.php');

function pilote()
{
     $piloteParPage = 1;


    $nb_pilotes = getNbPilote();

    $nbpages = ceil($nb_pilotes / $piloteParPage);
    if (isset(($_GET['page'])) && $_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {
        $pageCourante = (int) strip_tags($_GET['page']);
    } else {

        $pageCourante = 1;
    }

    $depart = ($pageCourante * $piloteParPage) - $piloteParPage;
    $allpilote = getAllPilote($depart, $piloteParPage); //Condition page numero 2 je met l'entreprise 5 a 9 

    require('src/view/pilote.php');
}
function rechercherPilotes(string $search)
{

    $spilotes = searchPilotes($search);
    require('src/view/searchpilote.php');
}