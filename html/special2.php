<?php
//echo( dirname( __FILE__ ).'/libs/Smarty.class.php' );
//exit;
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();

$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';
$smarty->left_delimiter = '<!--{';
$smarty->right_delimiter = '}-->';


$smarty->assign('tpl_title', 'test');
$smarty->assign('TPL_URLPATH', '');

$smarty->display('special2.tpl');
