<?php

require('./libs\smarty\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('pilotes', $pilotes);

$smarty->display('src/view/templates/pilote.tpl');
