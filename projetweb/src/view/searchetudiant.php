<?php

require_once('./lib\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('setudiants', $setudiants);

$smarty->display('src/view/templates/searchetudiant.tpl');
