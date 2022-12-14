<?php

require_once('header.php');

include 'gallery-bedrooms.php';
    
    
$smarty->assign('bedrooms', $bedrooms);



$smarty->display('bedroom.tpl');
