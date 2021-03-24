<?php
function indexAction($smarty){
    
   $nameCity = $_POST['q'];
   if (! $nameCity){
       redirect("/");
       return;
   }
   //$cityName = 'London';
   $rs = curlWeather($nameCity);
   $cityName = 'London';
   $smarty->assign('pageTitle', 'City');
   $smarty->assign('rs', $rs);
   d($rs);
  
   loadTemplate($smarty, 'header');
   loadTemplate($smarty, 'search');
   loadTemplate($smarty, 'footer');
}