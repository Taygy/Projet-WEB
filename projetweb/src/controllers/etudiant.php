<?php

require_once('src/modele/model.php');

function etudiant()
{
     $etudiantParPage = 1;


    $nb_etudiants = getNbEtudiant();

    $nbpages = ceil($nb_etudiants / $etudiantParPage);
    if (isset(($_GET['page'])) && $_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {
        $pageCourante = (int) strip_tags($_GET['page']);
    } else {

        $pageCourante = 1;
    }

    $depart = ($pageCourante * $etudiantParPage) - $etudiantParPage;
    $alletudiant = getAllEtudiant($depart, $etudiantParPage); //Condition page numero 2 je met l'entreprise 5 a 9 

    $etudiants = getEtudiant();
    require('src/view/etudiant.php');
}
