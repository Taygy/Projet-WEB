<?php
/* Smarty version 4.3.0, created on 2023-03-23 14:57:57
  from 'C:\wamp64\www\Formulaire\FormulairePOST\projetweb\src\view\templates\detailoffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641c68f5ca05b0_88885384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97a9f8c14d520d856f4ad8f75d98f52ee3a65bf1' => 
    array (
      0 => 'C:\\wamp64\\www\\Formulaire\\FormulairePOST\\projetweb\\src\\view\\templates\\detailoffre.tpl',
      1 => 1679566957,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_641c68f5ca05b0_88885384 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="src\public\css\global.css" />
    <link rel="stylesheet" href="src\public\css\header&footer.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>


<body>
    <div class="dtails-offre">
        <div class="boorder">
           <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <img class="capge" src="capgemini.png" />
            <b class="note">Note : </b>
            <div class="desc-entreprise"><?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->description_entreprise;?>
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
            <div class="adresse">Adresse :<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->adresse_complete;?>
</div>
            <div class="ville">Ville :<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->ville;?>
</div>
            <div class="code-postal">Code postal :<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->code_postal;?>
</div>
            <div class="rmunration">Rémunération :<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->remuneration;?>
 €/h</div>
            <div class="nb-places">Nombre de places disponibles :<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->nombre_places;?>
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
                    <a href="#">En savoir plus sur l’entreprise</a>
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
    <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
        
</body>

</html><?php }
}
