<?php
/* Smarty version 4.3.0, created on 2023-03-28 13:26:32
  from 'C:\wampserver\www\thomas\Projet-WEB-thomas\projetweb\src\view\templates\ajouteroffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422eb08814023_96152014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f6205fb227e822912ac505a79bc7d51d299300d' => 
    array (
      0 => 'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\ajouteroffre.tpl',
      1 => 1680008953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_6422eb08814023_96152014 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\creeroffre.css" />
    <link rel="stylesheet" href="public\css\header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <header>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
    <br>
    <br>
    <br>
    <br>
    <div class="crer-offre">
        <div class="vector-parent1">
            <img class="cadre" src="contact1.png" />
            <h1 class="grandtitre">Créer votre offre</h1>
            <form id=MyForm action="index.php?action=ajouteroffre" method="post">
                <label class="titre1" for="titre">Titre :</label>
                <input class="titre" type="text" id="titre" name="titre" required>
                <label class="durestage1" for="duree">Durée du stage :</label>
                <input class="durestage" type="text" id="duree" name="duree" required>
                <label class="competence1" for="competence">Compétence requises :</label>
                <input class="competence" type="text" id="competence" name="competence" required>
                <label class="nbplaces" for="competence">Nombre de places :</label>
                <input class="places" type="text" id="nombre_places" name="nombre_places" required>
                <label class="remuneration1" for="remuneration">Rémunération :</label>
                <input class="remuneration" type="text" id="remuneration" name="remuneration" required>
                <label class="description1" for="description_offre">Description de l offre :</label>
                <input class="description" type="text" id="description_offre" name="description_offre" required>


                <div class="check">
                    Je cértifie que toutes les informations entrées sont correctes
                    <input type="radio" id="certify" name="certify" value="1">
                </div>
                <div class="pub">
                    <button class="btn-pub" type="submit">Publier</button>
                    
                </div>
            </form>
        </div>

    </div>
</div>

    <footer>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>

</html><?php }
}
