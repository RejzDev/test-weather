<?php /* Smarty version Smarty-3.1.6, created on 2021-05-06 02:06:56
         compiled from "../views/default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25230605c3f4eacf916-24115661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078d4c97c557e977f4441293a639a7266a26497c' => 
    array (
      0 => '../views/default\\search.tpl',
      1 => 1620255999,
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
    'datesCnt' => 0,
    'i' => 0,
    'rsWeather' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605c3f4ead634')) {function content_605c3f4ead634($_smarty_tpl) {?><div class="block">


    <div class="row ">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['datesCnt']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['datesCnt']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">

                    <h3 class="card-title"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->temp);?>
 °C</h3>
                    <p class="card-text">
                        <tr>
                            <th>Місто</th><td>
                                <?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->city->name;?>
</td>
                            <br>
                        </tr>
                        <tr>
                            <th>Температура</th>
                            <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->temp);?>
 °C</td><br>
                        </tr>
                        <tr>
                            <th>Опис</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->weather[0]->description;?>
</td>
                            <td><img src='http://openweathermap.org/img/w/<?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->weather[0]->icon;?>
.png' alt='Icon depicting current weather.'></td><br>
                        </tr>
                        <tr>
                            <th>Швидкість вітру</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->wind->speed;?>
 м/с</td><br>
                        </tr>
                        <tr>
                            <th>Дата та час</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt;?>
</td><br>
                        </tr></p>

                </div>
            </div>
        </div>
        <?php }} ?>
</div>

</div>



<?php }} ?>