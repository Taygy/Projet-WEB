<?php

require('./libs\smarty-master\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('entreprises', $entreprises);


$smarty->display('src/view/templates/entreprise.tpl');
