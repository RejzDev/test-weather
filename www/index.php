<?php

session_start(); // Start Sesion


if (! isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

include_once '../config/config.php';         // Connecting file settings
//include_once '../config/db.php';             // Connecting file DataBase
include_once '../library/mainFunctions.php'; // Connecting file main functions

// Determine with which controller the job
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';


// Determine with which function the job
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

// We transfer user data to the template
if (isset($_SESSION['user'])){
    $smarty->assign('arUser', $_SESSION['user']);

}


$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($smarty, $controllerName, $actionName);
