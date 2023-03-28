<?php

require_once('src/modele/model.php');

function pilote()
{

    $pilotes = getPilotes();
    require('src/view/pilote.php');
}
