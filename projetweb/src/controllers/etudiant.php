<?php

require_once('src/modele/model.php');

function etudiant()
{
    session_start();
    $etudiantParPage = 1;
    $nb_etudiants = getNbEtudiant();//nombre d'étudiants
    $nbpages = ceil($nb_etudiants / $etudiantParPage);//nombre de pages
    if (isset(($_GET['page'])) && $_GET['page'] >= 1 && $_GET['page'] <= $nbpages) {
        $pageCourante = (int) strip_tags($_GET['page']);//page courante
    } else {

        $pageCourante = 1;
    }

    $depart = ($pageCourante * $etudiantParPage) - $etudiantParPage;
    $alletudiant = getAllEtudiant($depart, $etudiantParPage);//tous les étudiants

    $etudiants = getEtudiants();
    require('src/view/etudiant.php');
}

function rechercherEtudiants(string $search)//recherche étudiant
{

    $setudiants = searchEtudiants($search);
    require('src/view/searchetudiant.php');
}