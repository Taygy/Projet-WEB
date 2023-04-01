<?php
function logOut()
{
    session_start();
    session_destroy();//destroy the session
    header("Location: index.php?action=login");
    require('src/view/login.php');
    exit;
}
