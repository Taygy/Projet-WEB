<?php
/* Smarty version 4.3.0, created on 2023-03-28 13:26:29
  from 'C:\wampserver\www\thomas\Projet-WEB-thomas\projetweb\src\view\templates\detailentreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422eb05ae3451_26306681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe2680605d474dae9430b6d0be95106d321d0d4' => 
    array (
      0 => 'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\detailentreprise.tpl',
      1 => 1680009983,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_6422eb05ae3451_26306681 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/detailentre.css" />
    <link rel="stylesheet" href="public/css/bouton.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="dtails-dune-entreprise">
        <div class="container">
            <header>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </header>
            <div class="cadre">
                <img class="support" src="public\logo/contact1.png" />
                <button class="btn-ret2"><a href="index.php?action=">Modifier</a></button>
                <button class="supp3"><a href="index.php?action=">Supprimer</a></button>
                <div class="monaco-digital"><?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->nom;?>
</div>
                <div class="secteur">Secteur : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->secteur;?>
</div>
                <div class="adresse">Adresse : </div>
                <div class="ville">Ville : </div>
                <div class="email">
                    Email : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->mail;?>

                </div>
                <div class="code-postal">Code postal : </div>
                <div class="nb_postes">
                    Nombre d’employés : <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->nombre_employes;?>

                </div>
                <div class="description">
                    Description de l’entreprise : 
                </div>
                <div class="descrip-entre">
                    <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->description_entreprise;?>

                </div>
                <button class="btn2"><a href="index.php?action=ajouteroffre&id=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->id_entreprise;?>
">Ajouter une offre</a></button>
                <div class="voir_avis">
                    <ul>
                        <a href="#">Voir les avis sur cette entreprise</a>
                    </ul>
                </div>
                <b class="note">Note de l’entreprse : </b>
            </div>
            <div class="group-container">
                <div class="group">
                    <div class="support2"></div>
                    <div class="autres">Chercher d'autres entreprises</div>
                    <button class="btn-ret"><a href="index.php?action=entreprise">Retour</a></button>
                </div>
            </div>
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
