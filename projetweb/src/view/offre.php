<?php

require_once('./lib\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('currentPage', $pageCourante);
$smarty->assign('totalPages', $nbpages);
$smarty->assign('offres', $alloffre);

$smarty->display('src/view/templates/offre.tpl');
