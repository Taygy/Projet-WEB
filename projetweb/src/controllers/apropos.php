<?php
// controllers/homepage.php

require_once('src/modele/model.php');

function apropos()
{
    session_start();
    require('src/view/apropos.php');
}
