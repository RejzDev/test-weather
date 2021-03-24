<?php /* Smarty version Smarty-3.1.6, created on 2020-11-06 20:41:42
         compiled from "../views/default\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:247245f9ef25cdcffa4-15159609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5df48fe23d6db1928059ffcf8dc8290e0a3146e' => 
    array (
      0 => '../views/default\\product.tpl',
      1 => 1604684498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247245f9ef25cdcffa4-15159609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5f9ef25ce1561',
  'variables' => 
  array (
    'rsProduct' => 0,
    'itemInCart' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f9ef25ce1561')) {function content_5f9ef25ce1561($_smarty_tpl) {?>
    <h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

    <img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
">
    Соимость: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

    <a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme"<?php }?> href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Удалить с корзини ">Удалить с корзини</a>
    <a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value){?> class="hideme"<?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Добавить в корзину">Добавить в корзину</a>
    <p>Описание <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }} ?>