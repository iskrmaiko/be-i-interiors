<?php
require( dirname( __FILE__ ).'/smarty/libs/Smarty.class.php' );

$smarty = new Smarty();
$smarty->template_dir = dirname( __FILE__ ).'/smarty/templates';
$smarty->compile_dir  = dirname( __FILE__ ).'/smarty/templates_c';

