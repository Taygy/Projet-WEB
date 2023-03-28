<?php
/* Smarty version 4.3.0, created on 2023-03-28 13:20:17
  from 'C:\wampserver\www\thomas\Projet-WEB-thomas\projetweb\src\view\templates\detailoffre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422e9911e3c57_99443195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '947371fbc2185e67c75887e7560f3b7230a53e5e' => 
    array (
      0 => 'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\detailoffre.tpl',
      1 => 1680008954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_6422e9911e3c57_99443195 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public\css\global.css" />
    <link rel="stylesheet" href="public\css\header&footer.css" />
    <link rel="stylesheet" href="public\css\detailoffre.css" />
    <link rel="stylesheet" href="public/ajaxCodePostal.js" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM_Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <div class="dtails-offre">
        <div class="boorder">
         <header>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </header>
           <form id="MyForm" action="index.php?action=detailoffre" method="post">
            <img class="capge" src="public\logo/<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->logo;?>
" />
            <b class="note">Note : </b>
            <div class="desc-entreprise">
                <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->description_entreprise;?>

            </div>
            <div>
            <img class="support" src="public\logo/contact1.png" />
            <div>
            <button class="option" > 
            <a href="index.php?action=supprimeroffre&id=<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->id_offre;?>
">Supprimer</a>
            <button class="modif"> 
            <a href="index.php?action=modifieroffre&id=<?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->id_offre;?>
">Modifier</a>
            </div>
            </div>
            <div class="titre-offre"><?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->titre;?>
</div>
            
            <div class="dure-de-loffre">Durée de l’offre : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->duree;?>
</div>
            <div class="date">Email de l'entreprise : <?php echo $_smarty_tpl->tpl_vars['offre']->value[0]->mail;?>
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
                <button class="btn-pos"> <a href="#"> Postuler
            </div>
            <div class="whishlist">
                <button class="boutonsajout"> <a href="#">Ajouter à la wishlist
            </div>
            <div class="en-savoir-plus">
                <ul>
                    <a href="#">En savoir plus sur l’entreprise</a>
                </ul>
            </div>
            </form>
        </div>

        <div class="accueil">
            <div class="support2"></div>
            <div class="autres">Voir les autres offres</div>
            <button class="btn-ret"> <a href="index.php?action=offre">Retour</a>
        </div>
        
    </div>
    <!--footer-->
    <footer>
    <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>  
    </footer>    
</body>
</html><?php }
}
