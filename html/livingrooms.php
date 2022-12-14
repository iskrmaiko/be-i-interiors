<?php

require_once('header.php');

include 'gallery-livingrooms.php';
    
    
$smarty->assign('livingrooms', $livingrooms);



$smarty->display('livingrooms.tpl');
