<?php
/**
 * AdminController.php
 *
 * Controller /admin/
 */
    
    
    $smarty->setTemplateDir(TemplateAdminPrefix);
    $smarty->assign('TemplateWebPath', TemplateAdminWebPath);
    
    function indexAction($smarty){
        
        
        $smarty->assign('pageTitle', 'Адмін панель');
        
        loadTemplate($smarty, 'adminHeader');
        loadTemplate($smarty, 'admin');
        loadTemplate($smarty, 'adminFooter');
    }