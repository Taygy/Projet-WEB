<?php

require_once('src/modele/model.php');

require_once('src/view/templates/entreprise.tpl');

if (isset($_GET['page']) && !empty($_GET['page'])) {
    if ($_GET['page'] >= 1 && $_GET['page'] <= $pages) {
        $pageCourante = (int) strip_tags($_GET['page']);
    } else {
        $pageCourante = 1;
    }
} else {
    $pageCourante = 1;
}


$entrepriseParPage = 3;
$depart = ($pageCourante * $entrepriseParPage) - $entrepriseParPage;
$entreprises = getAllEntreprises($depart, $entrepriseParPage);
$nbpages = ceil($nb_entreprises / $entrepriseParPage);
