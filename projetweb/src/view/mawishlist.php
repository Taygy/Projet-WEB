<?php

require_once('./libs\smarty-master\smarty-master\libs\Smarty.class.php');
$smarty = new Smarty();
$smarty->template_dir = './app/view/templates';

$smarty->assign('wishlists', $wishlist);

$smarty->display('src/view/templates/mawishlist.tpl');
