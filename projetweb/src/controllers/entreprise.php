<?php

require_once('src/modele/model.php');
function entreprise() {
    $entreprises = getEntreprises();
    require('src/templates/entreprise.php');
}

