<?php /* Smarty version Smarty-3.1.6, created on 2021-03-26 21:25:47
         compiled from "../views/weather\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11450605e22f3afb009-75746892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eb5fca536b2acee4e35e3677bbd220f6a92e338' => 
    array (
      0 => '../views/weather\\header.tpl',
      1 => 1616783144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11450605e22f3afb009-75746892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_605e22f3b2aab',
  'variables' => 
  array (
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605e22f3b2aab')) {function content_605e22f3b2aab($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Compass Starter by Ariona, Rian</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/style.css">

  <!-- [if lt IE 9]>-->
  <!-- <script src="js/ie-support/html5.js"></script>-->
  <!-- <script src="js/ie-support/respond.js"></script>-->
  <!-- <![endif]-->

</head>
<body>

<div class="site-content">
    <div class="site-header">
        <div class="container">
            <a href="index.html" class="branding">
                <img src="images/logo.png" alt="" class="logo">
                <div class="logo-type">
                    <h1 class="site-title">Company name</h1>
                    <small class="site-description">tagline goes here</small>
                </div>
            </a>

            <!-- Default snippet for navigation -->
            <div class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="news.html">News</a></li>
                    <li class="menu-item"><a href="live-cameras.html">Live cameras</a></li>
                    <li class="menu-item"><a href="photos.html">Photos</a></li>
                    <li class="menu-item"><a href="contact.html">Contact</a></li>
                </ul> <!-- .menu -->
            </div> <!-- .main-navigation -->

            <div class="mobile-navigation"></div>

        </div>
    </div> <!-- .site-header --><?php }} ?>