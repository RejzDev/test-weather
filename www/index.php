<?php



include_once '../config/config.php';         // Connecting file settings
include_once '../library/mainFunctions.php'; // Connecting file main functions

// Determine with which controller the job
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';


// Determine with which function the job
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);
