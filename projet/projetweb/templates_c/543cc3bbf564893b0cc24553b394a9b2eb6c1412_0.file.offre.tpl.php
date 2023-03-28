<?php
/* Smarty version 4.3.0, created on 2023-03-28 14:47:22
  from 'C:\wampserver\www\thomas\Projet-WEB-thomas\projetweb\src\view\templates\offre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422fdfac366b4_25290175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '543cc3bbf564893b0cc24553b394a9b2eb6c1412' => 
    array (
      0 => 'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\offre.tpl',
      1 => 1680014835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:src/view/templates/header.tpl' => 1,
    'file:src/view/templates/footer.tpl' => 1,
  ),
),false)) {
function content_6422fdfac366b4_25290175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\libs\\smarty\\smarty-master\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="stylesheet" href="public/css/global.css" />
    <link rel="stylesheet" href="public/css/contact.css" />
    <link rel="stylesheet" href="public/css/header&footer.css" />
    <link rel="stylesheet" href="public/css/blablabla.css" />
    <link rel="stylesheet" href="public/css/pagination.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rufina:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM Sans:wght@400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Salsa:wght@400&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" />
</head>

<body>
    <header>
        <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </header>
     <div class="chercher-un-stage">
        <div class="nboffresdispo"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['offres']->value);?>
 offres disponibles</div>
        <button class="wish">Ma wishlist</button>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offres']->value, 'offre');
$_smarty_tpl->tpl_vars['offre']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['offre']->value) {
$_smarty_tpl->tpl_vars['offre']->do_else = false;
?>
        <div class="gigabox">
            <div class="box">
                <h4><?php echo $_smarty_tpl->tpl_vars['offre']->value->nom;?>
</h4>
                <img src="public\logo/<?php echo $_smarty_tpl->tpl_vars['offre']->value->logo;?>
" class="cap">
                <div class="le_fameuxh1"><?php echo $_smarty_tpl->tpl_vars['offre']->value->titre;?>
</div>
                <p><?php echo $_smarty_tpl->tpl_vars['offre']->value->description_offre;?>
 pour une durée de : <em><?php echo $_smarty_tpl->tpl_vars['offre']->value->duree;?>
</em></p>
                <em class="det"><a class="ho" href="index.php?action=detailoffre&id=<?php echo $_smarty_tpl->tpl_vars['offre']->value->id_offre;?>
">Détails</a></em>  
            </div>
        </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<ul class="pagination">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, range(1,$_smarty_tpl->tpl_vars['totalPages']->value), 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['currentPage']->value) {?>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</li>
        <?php } else { ?>
            <li><a href="index.php?action=offre&page=<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a></li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

		
        </div>
        <footer>
    <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>

</html><?php }
}
