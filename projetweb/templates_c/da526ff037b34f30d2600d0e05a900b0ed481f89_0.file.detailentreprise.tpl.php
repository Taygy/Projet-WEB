<?php
/* Smarty version 4.3.0, created on 2023-03-23 19:36:23
  from 'C:\wamp64\www\Formulaire\FormulairePOST\projetweb\src\view\templates\detailentreprise.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_641caa377d3239_99124632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da526ff037b34f30d2600d0e05a900b0ed481f89' => 
    array (
      0 => 'C:\\wamp64\\www\\Formulaire\\FormulairePOST\\projetweb\\src\\view\\templates\\detailentreprise.tpl',
      1 => 1679600181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_641caa377d3239_99124632 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Détail de l'entreprise</title>
    <link href="style.css" rel="stylesheet" />
</head>

<body>
    <h1>Détails de l'entreprise</h1>
    <p><a href="index.php?action=entreprise">Retour à la liste des entreprises</a></p>

    <div class="news">
        <p>
            <img src="<?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->lien_logo;?>
">
            <br>
            <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->nom;?>

            <br> Secteur : 
            <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->secteur;?>

            <br>Description :
            <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->description_entreprise;?>

            <br>Mail :
            <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->mail;?>

            <br>Confiance donnée :
            <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->confiance;?>

            <br>Nombre d'employés :
            <?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->nombre_employes;?>

        </p>
        </form>
        <p><a href="index.php?action=ajouteroffre&id=<?php echo $_smarty_tpl->tpl_vars['entreprise']->value[0]->id_entreprise;?>
">Vous voulez ajouter une offre ?</a></p>
        
    </div>
</body>

</html><?php }
}
