<?php /* Smarty version Smarty-3.1.6, created on 2021-03-23 21:50:28
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77345f54c29049eca8-64797976%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1616525302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77345f54c29049eca8-64797976',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f54c2904e5f9',
  'variables' => 
  array (
    'pageTitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f54c2904e5f9')) {function content_5f54c2904e5f9($_smarty_tpl) {?>
    <html>
    <head>

        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
           </head>
    <body>
    <div id="header">
        <h1>my shop - интернет магазин</h1>
    </div>
    <div class="weather">
        <h2 class="weather__title">Погода в городе <<?php ?>?php echo $data->name; ?<?php ?>></h2>
        <div class="weather__time">
            <p class="weather__time"><<?php ?>?php echo date("l g:i a", $currentTime); ?<?php ?>></p>
            <p class="weather__date"><<?php ?>?php echo date("jS F, Y",$currentTime); ?<?php ?>></p>
            <p class="weather__status"><<?php ?>?php echo ucwords($data->weather[0]->description); ?<?php ?>></p>
        </div>
        <div class="weather__forecast">
            <span class="weather__min"><<?php ?>?php echo $data->main->temp_min; ?<?php ?>>°C</span>
            <span class="weather__max"><<?php ?>?php echo $data->main->temp_max; ?<?php ?>>°C</span>
        </div>
        <p class="weather__humidity">Влажность: <<?php ?>?php echo $data->main->humidity; ?<?php ?>> %</p>
        <p class="weather__wind">Ветер: <<?php ?>?php echo $data->wind->speed; ?<?php ?>> км/ч</p>
    </div>

    <div id="centerColumn">

 <?php }} ?>