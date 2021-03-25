<?php /* Smarty version Smarty-3.1.6, created on 2021-03-25 21:02:27
         compiled from "../views/default\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28348605c3f4ee7c829-33903478%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '345bdb8f839f160ac4fa3a7e53630c8be64410e5' => 
    array (
      0 => '../views/default\\index.tpl',
      1 => 1616695347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28348605c3f4ee7c829-33903478',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_605c3f4ee9b3b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605c3f4ee9b3b')) {function content_605c3f4ee9b3b($_smarty_tpl) {?>    




    <div class="container">
    <form action="/search/" method="GET">
        <div class="mb-3">

            <input type="search" class="form-control" name="nameCity" id="nameCity" placeholder="Введіть назву міста">

        </div>

        <input type="submit" class="btn btn-primary " value="Найти">
    </form>
    </div><?php }} ?>