<?php
/* Smarty version 4.3.0, created on 2023-03-28 14:24:11
  from 'C:\wampserver\www\thomas\Projet-WEB-thomas\projetweb\src\view\templates\etudiant.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6422f88b579d77_45916449',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3120a90563d1fe53cd6cff8cd9f3646da78bd850' => 
    array (
      0 => 'C:\\wampserver\\www\\thomas\\Projet-WEB-thomas\\projetweb\\src\\view\\templates\\etudiant.tpl',
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
function content_6422f88b579d77_45916449 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="nboffresdispo"><?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['etudiants']->value);?>
 etudiants disponibles</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['etudiants']->value, 'etudiant');
$_smarty_tpl->tpl_vars['etudiant']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['etudiant']->value) {
$_smarty_tpl->tpl_vars['etudiant']->do_else = false;
?>
        <div class="gigabox">
            <div class="box">
                <img src="public\logo/<?php echo $_smarty_tpl->tpl_vars['etudiant']->value->logo;?>
" class="cap">
                <div class="le_fameuxh1"><?php echo $_smarty_tpl->tpl_vars['etudiant']->value->nom;?>
  <?php echo $_smarty_tpl->tpl_vars['etudiant']->value->prenom;?>
</div>
                <p><?php echo $_smarty_tpl->tpl_vars['etudiant']->value->centre;?>
 <?php echo $_smarty_tpl->tpl_vars['etudiant']->value->promotion;?>
 
                <?php echo $_smarty_tpl->tpl_vars['etudiant']->value->mail;?>
 
                </p>
            </div>
        </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
		
        <footer>
    <?php $_smarty_tpl->_subTemplateRender("file:src/view/templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </footer>
</body>

</html><?php }
}
