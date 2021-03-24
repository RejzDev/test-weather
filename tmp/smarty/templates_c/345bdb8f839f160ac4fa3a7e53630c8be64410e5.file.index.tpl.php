<?php /* Smarty version Smarty-3.1.6, created on 2021-03-24 21:47:40
         compiled from "../views/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298985f41320a3d79c2-92033710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345bdb8f839f160ac4fa3a7e53630c8be64410e5' => 
    array (
      0 => '../views/default\\index.tpl',
      1 => 1616611656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298985f41320a3d79c2-92033710',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f41320a410af',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f41320a410af')) {function content_5f41320a410af($_smarty_tpl) {?>    


    <form action="/search/" method="POST">
        <input type="search" name="q" id="q" placeholder="Введіть Місто">
        <input type="submit" value="Найти">
    </form>
<?php }} ?>