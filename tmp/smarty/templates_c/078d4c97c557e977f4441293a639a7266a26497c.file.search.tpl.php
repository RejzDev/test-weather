<?php /* Smarty version Smarty-3.1.6, created on 2021-03-28 21:43:13
         compiled from "../views/default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25230605c3f4eacf916-24115661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078d4c97c557e977f4441293a639a7266a26497c' => 
    array (
      0 => '../views/default\\search.tpl',
      1 => 1616956993,
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




    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->main->temp);?>
 °C</a></li>
        <li><a data-toggle="tab" href="#menu1"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[8]->main->temp);?>
 °C</a></li>
        <li><a data-toggle="tab" href="#menu2"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[16]->main->temp);?>
 °C</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <h3><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->main->temp);?>
 °C</h3>
            <p>
                <tr>
                    <th>Місто</th><td>
                        <?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->city->name;?>
</td>
                    <br>
                </tr>
                <tr>
                    <th>Температура</th>
                    <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->main->temp);?>
 °C</td><br>
                </tr>
                <tr>
                    <th>Опис</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->weather[0]->description;?>
</td><br>
                </tr>
                <tr>
                    <th>Швидкість вітру</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->wind->speed;?>
 м/с</td><br>
                </tr>
                <tr>
                    <th>Дата та час</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->dt_txt;?>
</td><br>
                </tr></p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[1]->main->temp);?>
 °C</h3>
            <p> <tr>
                    <th>Місто</th><td>
                        <?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->city->name;?>
</td>
                    <br>
                </tr>
                <tr>
                    <th>Температура</th>
                    <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[8]->main->temp);?>
 °C</td><br>
                </tr>
                <tr>
                    <th>Опис</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[8]->weather[0]->description;?>
</td><br>
                </tr>
                <tr>
                    <th>Швидкість вітру</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[8]->wind->speed;?>
 м/с</td><br>
                </tr>
                <tr>
                    <th>Дата та час</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[6]->dt_txt;?>
</td><br>
                </tr></p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Some content in menu 2.</p>
        </div>
    </div>
</div>


<?php }} ?>