<?php /* Smarty version Smarty-3.1.6, created on 2021-03-27 13:44:56
         compiled from "../views/default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25230605c3f4eacf916-24115661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078d4c97c557e977f4441293a639a7266a26497c' => 
    array (
      0 => '../views/default\\search.tpl',
      1 => 1616841895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25230605c3f4eacf916-24115661',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_605c3f4ead634',
  'variables' => 
  array (
    'rsWeather' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605c3f4ead634')) {function content_605c3f4ead634($_smarty_tpl) {?><div class="block">
    <table>
<tr>
    <th>Місто</th><td>
        <?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->city->name;?>
</td>
</tr>
    <tr>
    <th>Температура</th>
        <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->main->temp);?>
 °C</td>
</tr>
        <tr>
            <th>Опис</th>
            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->weather[0]->description;?>
</td>
        </tr>
        <tr>
            <th>Швидкість вітру</th>
            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->wind->speed;?>
 м/с</td>
        </tr>
        <tr>
            <th>Дата та час</th>
            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->dt_txt;?>
</td>
        </tr>


    </table>
</div>
<?php }} ?>