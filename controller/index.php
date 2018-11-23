<?php
require_once('../smarty/libs/Smarty.class.php');

$smarty = new Smarty;
$smarty->template_dir = '../view';
$smarty->compile_dir = '../smarty/tmp';
$smarty->cache_dir ='../smarty/cache';
$smarty->config_dir = '../smarty/configs';


$smarty->force_compile = true;
$smarty->debugging = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

//$smarty->assign('Username', 'Sara'); //FOR NOW IS STATIC, CREATE LOG IN FUNCTION!
//$smarty->display('header.tpl');
//$smarty->display('index.tpl');

$smarty->display('login.tpl');
