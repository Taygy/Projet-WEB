<?php
/* Smarty version 4.3.0, created on 2023-03-23 22:15:43
  from 'C:\wamp64\www\Formulaire\FormulairePOST\projetweb\src\view\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641ccf8fc83fe3_74409901',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b33538f9b799963777948dd97ab938bb7087fcac' => 
    array (
      0 => 'C:\\wamp64\\www\\Formulaire\\FormulairePOST\\projetweb\\src\\view\\templates\\footer.tpl',
      1 => 1679609742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641ccf8fc83fe3_74409901 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\header&footer.css" />
</head>
<body>
    <div class="footer-dark">
        <footer>
            <div class="container-footer">
                <div class="col-entreprise">
                    <h3>ENTREPRISE</h3>
                    <ul>
                        <li><a href="#">Trouver des stagiaires</a></li>
                        <li><a href="#">Créer votre offre</a></li>
                    </ul>
                </div>
                <div class="col-cesi">
                    <h3>Etudiant</h3>
                    <ul>
                        <li><a href="#">Chercher une offre</a></li>
                        <li><a href="index.php?action=entreprise">Decouvrir des entreprises</a></li>
                    </ul>
                </div>
                <div class="col-trouvez-nous">
                    <h3>Trouvez-nous sur</h3>
                    <img class="insta" src="public\logo\instaa.png" />
                    <img class="twitter" src="public\logo\twitter.png" />
                    <img class="fb" src="public\logo\fb.png" />
                </div>
            </div>
            <img src="public\logo\logoce.png" alt="Logo de CESI" class="my-image1">
            <p class="copyright">CESI © 2023</p>
        </footer>
    </div>
</body>
</html><?php }
}