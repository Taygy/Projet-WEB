<?php

require('./lib/smarty-4.2.1/libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('etudiants', $etudiants);

$smarty->display('src/view/templates/etudiant.tpl');
