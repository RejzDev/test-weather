<?php

/** Settings file */

// Constant to access the controller
    define('PathPrefix', '../controllers/');
    define('PathPostfix', 'Controller.php');

    //> Used template
    $template = 'default';
    $templateAdmin = 'admin';
    
    // paths to template files (*tpl)
    define('TemplatePrefix', "../views/$template/");
    define('TemplatePostfix', '.tpl');
    
    define('TemplateAdminPrefix', "../views/$templateAdmin/");
    define('TemplateAdminPostfix', '.tpl');
    
    // paths to template files in web space
    define ('TemplateWebPath', "/templates/$template/");
    define ('TemplateAdminWebPath', "/templates/$templateAdmin/");
    //<
    
    //> initialization template Smarty
    // put full path to Smarty.class.php
    require('../library/Smarty/libs/Smarty.class.php');
    $smarty = new Smarty();
    
    $smarty->setTemplateDir(TemplatePrefix);
    $smarty->setCompileDir('../tmp/smarty/templates_c');
    $smarty->setCacheDir('../tmp/smarty/cache');
    $smarty->setConfigDir('../library/Smarty/configs');
    
    $smarty->assign('TemplateWebPath', TemplateWebPath);    //<
    