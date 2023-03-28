<?php
/* Smarty version 4.3.0, created on 2023-03-28 13:16:14
  from 'C:\wampserver\www\thomas\Projet-WEB-thomas\projetweb\src\view\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422e89e6f1905_92168155',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69253ca37f49939bba0a557bbf6c30e43ecfe33b' => 
    array (
      0 => 'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\header.tpl',
      1 => 1680008954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6422e89e6f1905_92168155 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/header.css" />
</head>
<body>
    <header>
        <div class="header">
            <div class="navbar">
                <div class="logo">
                    <div class="image-1">
                    <img src="public/logo/logoce.png" alt="Logo de CESI" id="my-image">
                    </div>
                </div>
                <button class="mon-compte">Mon compte</button>
                <div class="menu-icon">
                    <ul class="nav-links">
                        <li><a href="index.php?action=homepage"">Accueil</a></li>
                        <li><a href="index.php?action=apropos">A propos</a></li>
                        <li><a href="#">Avis</a></li>
                        <li><a href="index.php?action=contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>

</html><?php }
}
