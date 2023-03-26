<?php
/* Smarty version 4.3.0, created on 2023-03-26 06:50:54
  from 'C:\wampserver\www\Projet-WEB-thomas\projetweb\src\view\templates\entreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641feb4e594de7_64209786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '941af8971e9366e4cb37f89ad32899cffd64364d' => 
    array (
      0 => 'C:\\wampserver\\www\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\entreprise.tpl',
      1 => 1679813128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_641feb4e594de7_64209786 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/avis.css"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
  </head>

  <body>
  <div class="main-content">
   <header>
	 <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
    <div class="filtres">
        <input type="text" id="search" name="search" >
    <label class="dispo">
        XX offres disponibles
    </label>
    <form id="MyForm" action="index.php?action=voiroffre" method="post">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['entreprises']->value, 'entreprise');
$_smarty_tpl->tpl_vars['entreprise']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['entreprise']->value) {
$_smarty_tpl->tpl_vars['entreprise']->do_else = false;
?>
     <div class="gigabox">
        <div class="box">
            <img src="public\logo\images/<?php echo '<?'; ?>
= $entreprise->logo <?php echo '?>'; ?>
">
            <h4>offre de stage</h4>
            <div class="sous-titre"><?php echo '<?'; ?>
=$entreprise->nom<?php echo '?>'; ?>
</div>
            <div class="contenu">
                <?php echo '<?'; ?>
= $entreprise->description_entreprise; <?php echo '?>'; ?>

	        </div>
        </div>
        <em><a href="index.php?action=detailentreprise&id=<?php echo '<?'; ?>
= urlencode($entreprise->id_entreprise) <?php echo '?>'; ?>
">Détails</a></em>

    </div>
		  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<p><a href="index.php?action=ajouterentreprise">Vous voulez ajouter une entreprise ?</a></p>
	<p><a href="index.php?action=modifierentreprise">Vous voulez modifier une entreprise ?</a></p>
	</form>
  </div>
 
  <footer>
	<?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>
</html><?php }
}
