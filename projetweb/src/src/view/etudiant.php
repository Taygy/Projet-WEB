<?php

require_once('./lib\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('etudiants', $alletudiant);
$smarty->assign('currentPage', $pageCourante);
$smarty->assign('totalPages', $nbpages);

$smarty->display('src/view/templates/etudiant.tpl');
