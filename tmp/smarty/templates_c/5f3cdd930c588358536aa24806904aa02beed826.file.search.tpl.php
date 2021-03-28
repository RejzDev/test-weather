<?php /* Smarty version Smarty-3.1.6, created on 2021-03-26 21:26:33
         compiled from "../views/weather\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30339605e26e0538791-78468641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f3cdd930c588358536aa24806904aa02beed826' => 
    array (
      0 => '../views/weather\\search.tpl',
      1 => 1616783190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30339605e26e0538791-78468641',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_605e26e0586d0',
  'variables' => 
  array (
    'TemplateWebPath' => 0,
    'rsWeather' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_605e26e0586d0')) {function content_605e26e0586d0($_smarty_tpl) {?>
<div class="hero" data-bg-image="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/banner.png">
    <div class="container">
        <form action="#" class="find-location">
            <input type="text" placeholder="Find your location...">
            <input type="submit" value="Find">
        </form>

    </div>
</div>

<div class="forecast-table">
    <div class="container">
        <div class="forecast-container">
            <div class="today forecast">
                <div class="forecast-header">
                    <div class="day">Monday</div>
                    <div class="date">6 Oct</div>
                </div> <!-- .forecast-header -->
                <div class="forecast-content">
                    <div class="location">New York</div>
                    <div class="degree">
                        <div class="num"><?php echo $_smarty_tpl->tpl_vars['rsWeather']->value->list[0]->main->temp;?>
<sup>o</sup>C</div>
                        <div class="forecast-icon">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icons/icon-1.svg" alt="" width=90>
                        </div>
                    </div>
                    <span><img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icon-umberella.png" alt="">20%</span>
                    <span><img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icon-wind.png" alt="">18km/h</span>
                    <span><img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icon-compass.png" alt="">East</span>
                </div>
            </div>
            <div class="forecast">
                <div class="forecast-header">
                    <div class="day">Tuesday</div>
                </div> <!-- .forecast-header -->
                <div class="forecast-content">
                    <div class="forecast-icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icons/icon-3.svg" alt="" width=48>
                    </div>
                    <div class="degree">23<sup>o</sup>C</div>
                    <small>18<sup>o</sup></small>
                </div>
            </div>
            <div class="forecast">
                <div class="forecast-header">
                    <div class="day">Wednesday</div>
                </div> <!-- .forecast-header -->
                <div class="forecast-content">
                    <div class="forecast-icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icons/icon-5.svg" alt="" width=48>
                    </div>
                    <div class="degree">23<sup>o</sup>C</div>
                    <small>18<sup>o</sup></small>
                </div>
            </div>
            <div class="forecast">
                <div class="forecast-header">
                    <div class="day">Thursday</div>
                </div> <!-- .forecast-header -->
                <div class="forecast-content">
                    <div class="forecast-icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icons/icon-7.svg" alt="" width=48>
                    </div>
                    <div class="degree">23<sup>o</sup>C</div>
                    <small>18<sup>o</sup></small>
                </div>
            </div>
            <div class="forecast">
                <div class="forecast-header">
                    <div class="day">Friday</div>
                </div> <!-- .forecast-header -->
                <div class="forecast-content">
                    <div class="forecast-icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icons/icon-12.svg" alt="" width=48>
                    </div>
                    <div class="degree">23<sup>o</sup>C</div>
                    <small>18<sup>o</sup></small>
                </div>
            </div>
            <div class="forecast">
                <div class="forecast-header">
                    <div class="day">Saturday</div>
                </div> <!-- .forecast-header -->
                <div class="forecast-content">
                    <div class="forecast-icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icons/icon-13.svg" alt="" width=48>
                    </div>
                    <div class="degree">23<sup>o</sup>C</div>
                    <small>18<sup>o</sup></small>
                </div>
            </div>
            <div class="forecast">
                <div class="forecast-header">
                    <div class="day">Sunday</div>
                </div> <!-- .forecast-header -->
                <div class="forecast-content">
                    <div class="forecast-icon">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['TemplateWebPath']->value;?>
images/icons/icon-14.svg" alt="" width=48>
                    </div>
                    <div class="degree">23<sup>o</sup>C</div>
                    <small>18<sup>o</sup></small>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>