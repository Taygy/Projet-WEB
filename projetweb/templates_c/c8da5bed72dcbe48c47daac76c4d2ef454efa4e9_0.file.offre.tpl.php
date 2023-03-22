<?php
/* Smarty version 4.2.1, created on 2023-03-22 15:49:59
  from 'C:\xampp\htdocs\projetweb\src\view\templates\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_641b1597678235_55410036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8da5bed72dcbe48c47daac76c4d2ef454efa4e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projetweb\\src\\view\\templates\\offre.tpl',
      1 => 1679496598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_641b1597678235_55410036 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="global.css" />
    <link rel="stylesheet" href="index.css" />
    <link rel="script" href="script.js"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>
<header>
    <?php $_smarty_tpl->_subTemplateRender('file:src/view/templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</header>
<body>
    <div class="gigabox">
        <div class="filtres">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <form action="index.php?action=offre" method="POST">
                    <label for="Rechercher">Rechercher des offres :</label>
                    <input type="text" id="search" name="search">
                </form>
        </div>
    </div>
    <div class="gigabox">
        <div class="box">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offres']->value, 'offre');
$_smarty_tpl->tpl_vars['offre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
$_smarty_tpl->tpl_vars['offre']->do_else = false;
?>
                <h4><?php echo $_smarty_tpl->tpl_vars['offre']->value->nom;?>
</h4>
                <img src="<?php echo $_smarty_tpl->tpl_vars['offre']->value->lien_logo;?>
" class="cap">
                <h1><?php echo $_smarty_tpl->tpl_vars['offre']->value->titre;?>
</h1>
                <p><?php echo $_smarty_tpl->tpl_vars['offre']->value->description_offre;?>
 pour une durée de : <em><?php echo $_smarty_tpl->tpl_vars['offre']->value->duree;?>
</em></p>
                <em><a href="index.php?action=detailoffre&id=<?php echo urlencode($_smarty_tpl->tpl_vars['offre']->value->id_offre);?>
">Détails</a></em>
                </p>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
    <?php $_smarty_tpl->_subTemplateRender('file:src/view/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html><?php }
}
