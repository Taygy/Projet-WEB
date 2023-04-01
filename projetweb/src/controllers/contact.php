<?php
// controllers/homepage.php

require_once('src/modele/model.php');

function contact()
{
    session_start();
    require('src/view/contact.php');
}
