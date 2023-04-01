<?php


require_once('src/modele/model.php');

function avis()
{
    session_start();
    require('src/view/avis.php');
}
