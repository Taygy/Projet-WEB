<?php
function logOut()
{
    session_start();
    session_destroy();
    header("Location: index.php?action=login");
    require('src/view/login.php');
    exit;
}
