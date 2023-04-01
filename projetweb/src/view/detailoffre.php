<?php

require('./libs\smarty\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('offre', $offre);

$smarty->display('src/view/templates/detailoffre.tpl');
