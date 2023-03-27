<?php

require('./libs\smarty-master\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';


$smarty->display('src/view/templates/apropos.tpl');
