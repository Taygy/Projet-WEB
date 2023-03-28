<?php

require_once('./libs\smarty-master\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('offres', $offres);
$smarty->assign('currentPage', $pageCourante);
$smarty->assign('totalPages', $nbpages);

$smarty->display('src/view/templates/offre.tpl');
