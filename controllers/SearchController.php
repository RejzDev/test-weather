<?php
    include_once "../models/SearchModel.php";

function indexAction($smarty){
    
   $nameCity = $_GET['nameCity'];
   if (! $nameCity){
       redirect("/");
       return;
   }
   //$cityName = 'London';
   $rsWeather = getWeatherDate($nameCity);
   
   $smarty->assign('pageTitle', $nameCity);
   $smarty->assign('rsWeather', $rsWeather);
   
  
   loadTemplate($smarty, 'header');
   loadTemplate($smarty, 'search');
   loadTemplate($smarty, 'footer');
}