<?php

require_once('./libs\smarty\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('entreprises', $allentreprise);
$smarty->assign('currentPage', $pageCourante);
$smarty->assign('totalPages', $nbpages);


$smarty->display('src/view/templates/entreprise.tpl');
