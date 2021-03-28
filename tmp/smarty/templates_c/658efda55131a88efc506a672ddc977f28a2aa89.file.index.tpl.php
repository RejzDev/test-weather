<?php /* Smarty version Smarty-3.1.6, created on 2021-03-26 21:25:47
         compiled from "../views/weather\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26475605e231821c076-54922273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '658efda55131a88efc506a672ddc977f28a2aa89' => 
    array (
      0 => '../views/weather\\index.tpl',
      1 => 1616783144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26475605e231821c076-54922273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_605e231821e5a',
  'variables' => 
  array (
    'TemplateWebPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605e231821e5a')) {function content_605e231821e5a($_smarty_tpl) {?>

    <div class="hero" data-bg-image="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/banner.png">
        <div class="container">
            <form action="#" class="find-location">
                <input type="text" placeholder="Find your location...">
                <input type="submit" value="Find">
            </form>

        </div>
    </div>




<?php }} ?>