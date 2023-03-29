<?php

require_once('src/modele/model.php');

function mawishlist()
{
    session_start();
    $wishlist = getWishlist($_SESSION['id_membre']);
    require('src/view/mawishlist.php');
}
