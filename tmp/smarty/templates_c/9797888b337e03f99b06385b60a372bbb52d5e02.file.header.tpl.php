<?php /* Smarty version Smarty-3.1.6, created on 2021-03-25 15:01:55
         compiled from "../views/default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25225605c3f4ea80077-54974844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9797888b337e03f99b06385b60a372bbb52d5e02' => 
    array (
      0 => '../views/default\\header.tpl',
      1 => 1616673714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25225605c3f4ea80077-54974844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_605c3f4eabf69',
  'variables' => 
  array (
    'pageTitle' => 0,
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605c3f4eabf69')) {function content_605c3f4eabf69($_smarty_tpl) {?>
    <html>
    <head>

        <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
css/style.css" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="../js/js.js"></script>
           </head>
    <body>
    <div class="container">
    <div id="header" class="text-center">
        <h1 class="h1-color">WEATHER</h1>
    </div>


    <div id="centerColumn">

 <?php }} ?>