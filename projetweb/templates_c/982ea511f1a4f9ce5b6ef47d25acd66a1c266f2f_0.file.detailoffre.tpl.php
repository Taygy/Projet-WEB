<?php
/* Smarty version 4.2.1, created on 2023-03-22 15:40:27
  from 'C:\xampp\htdocs\projetweb\src\view\templates\detailoffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641b135b6fad27_87126562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '982ea511f1a4f9ce5b6ef47d25acd66a1c266f2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetweb\\src\\view\\templates\\detailoffre.tpl',
      1 => 1679496026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_641b135b6fad27_87126562 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\detailoffre.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="dtails-offre">
        <div class="boorder">
            <?php $_smarty_tpl->_subTemplateRender('file:src/view/templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <img class="capge" src="capgemini.png" />
            <b class="note">Note : </b>
            <div class="desc-entreprise">
                <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->description_entreprise;?>

            </div>

            <img class="support" src="contact1.png" />
            <select class="option" name="Option">
                <option value="supp">Supprimer</option>
                <option value="mod">Modifier</option>
            </select>
            <div class="titre-offre"><?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->titre;?>
</div>
            <div class="dure-de-loffre">Durée de l’offre : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->duree;?>
</div>
            <div class="adresse">Adresse : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->adresse_complete;?>
</div>
            <div class="ville">Ville : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->ville;?>
</div>
            <div class="code-postal">Code postal : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->code_postal;?>
</div>
            <div class="rmunration">Rémunération : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->remuneration;?>
 €/h</div>
            <div class="nb-places">Nombre de places disponibles : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->nombre_places;?>
</div>
            <div class="description-de-loffres">Description de l’offre :</div>
            <div class="description"><?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->description_offre;?>
</div>
            <div class="postuler">
                <button class="btn-pos">Postuler</button>
            </div>
            <div class="whishlist">
                <button class="boutonsajout">Ajouter à la wishlist</button>
            </div>
            <div class="en-savoir-plus">
                <ul>
                    <a href="index.php?action=detailentreprise&id=<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->id_entreprise;?>
">En savoir plus sur l’entreprise</a>
                </ul>
            </div>
        </div>

        <div class="accueil">
            <div class="support2"></div>
            <div class="autres">Voir les autres offres</div>
            <button class="btn-ret">Retour</button>
        </div>
    </div>
    <!--footer-->
    <div class="footer-dark">
        <?php $_smarty_tpl->_subTemplateRender('file:src/view/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>

</html><?php }
}
