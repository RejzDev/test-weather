<?php /* Smarty version Smarty-3.1.6, created on 2021-05-06 16:02:32
         compiled from "../views/default\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25230605c3f4eacf916-24115661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '078d4c97c557e977f4441293a639a7266a26497c' => 
    array (
      0 => '../views/default\\search.tpl',
      1 => 1620306147,
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
    'dayOfWeek' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605c3f4ead634')) {function content_605c3f4ead634($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\OSPanel\\domains\\weathertest.local\\library\\Smarty\\libs\\plugins\\modifier.date_format.php';
?>
<div class="container">
    <form action="/search/" method="GET">
        <div class="mb-3">

            <input type="search" class="form-control" name="nameCity" id="nameCity" placeholder="Введіть назву міста">

        </div>

        <input type="submit" class="btn btn-primary " value="Найти">
    </form>
</div>

<div class="block">
        <h3><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->city->name;?>
</h3>
    <ul class="nav nav-tabs">

        <li class="active"><a data-toggle="tab" href="#home"><p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['dayOfWeek'];?>
</p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->dt_txt,"%d");?>
 <p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['months'];?>
</p> </a></li>
        <li><a data-toggle="tab" href="#menu2"><p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[9]['dayOfWeek'];?>
</p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[9]->dt_txt,"%d");?>
 <p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[9]['months'];?>
</p> </a></li>
        <li><a data-toggle="tab" href="#menu3"><p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['dayOfWeek'];?>
</p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[18]->dt_txt,"%d");?>
 <p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[18]['months'];?>
</p> </a></li>
        <li><a data-toggle="tab" href="#menu4"><p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['dayOfWeek'];?>
</p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[26]->dt_txt,"%d");?>
 <p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[26]['months'];?>
</p> </a></li>
        <li><a data-toggle="tab" href="#menu5"><p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['dayOfWeek'];?>
</p><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[34]->dt_txt,"%d");?>
 <p><?php echo $_smarty_tpl->tpl_vars['dayOfWeek']->value[34]['months'];?>
</p> </a></li>
    </ul>


    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
    <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>


                    <th scope="col"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%H:%M");?>
</th>
    <?php }?>
    <?php }} ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                    <td><img src='http://openweathermap.org/img/w/<?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->weather[0]->icon;?>
.png' alt='Icon depicting current weather.'></td>
                    <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->temp);?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->wind->speed;?>
</td>
                        <?php }?>
                    <?php }} ?>

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->grnd_level*0.75;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->humidity;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[0]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->pop;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu2" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[8]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>


                            <th scope="col"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%H:%M");?>
</th>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[8]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><img src='http://openweathermap.org/img/w/<?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->weather[0]->icon;?>
.png' alt='Icon depicting current weather.'></td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[8]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->temp);?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[8]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->wind->speed;?>
</td>
                        <?php }?>
                    <?php }} ?>

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[8]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->grnd_level*0.75;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[8]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->humidity;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[8]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->pop;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu3" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>

                            <th scope="col"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%H:%M");?>
</th>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><img src='http://openweathermap.org/img/w/<?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->weather[0]->icon;?>
.png' alt='Icon depicting current weather.'></td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->temp);?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->wind->speed;?>
</td>
                        <?php }?>
                    <?php }} ?>

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->grnd_level*0.75;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->humidity;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[17]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->pop;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu4" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>


                            <th scope="col"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%H:%M");?>
</th>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><img src='http://openweathermap.org/img/w/<?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->weather[0]->icon;?>
.png' alt='Icon depicting current weather.'></td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->temp);?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->wind->speed;?>
</td>
                        <?php }?>
                    <?php }} ?>

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->grnd_level*0.75;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->humidity;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[25]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->pop;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </tbody>
            </table>
            </p>
        </div>

        <div id="menu5" class="tab-pane fade">
            <p>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>


                            <th scope="col"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%H:%M");?>
</th>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row"></th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><img src='http://openweathermap.org/img/w/<?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->weather[0]->icon;?>
.png' alt='Icon depicting current weather.'></td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Температура, °C</th>

                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->temp);?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вітер, м/сек</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->wind->speed;?>
</td>
                        <?php }?>
                    <?php }} ?>

                </tr>
                <tr>
                    <th scope="row">Тиск, мм</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->grnd_level*0.75;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Вологість, %</th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->main->humidity;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                <tr>
                    <th scope="row">Ймовірність опадів, %
                    </th>
                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 40+1 - (0) : 0-(40)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if (smarty_modifier_date_format($_smarty_tpl->tpl_vars['dayOfWeek']->value[33]['date'],"%d")==smarty_modifier_date_format($_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->dt_txt,"%d")){?>
                            <td><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[$_smarty_tpl->tpl_vars['i']->value]->pop;?>
</td>
                        <?php }?>
                    <?php }} ?>
                </tr>
                </tbody>
            </table>
            </p>
        </div>


    </div>

</div>



<?php }} ?>