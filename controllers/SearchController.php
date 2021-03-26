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
  $date = $rsWeather->list[0]->dt_txt;
  //foreach ($rsWeather as $item){
  //    $gg = $item['name'];
  //}
    
    $dates = date("l", strtotime($date));
    
    // Перевод
   // $days = [
   //     'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
   //     'Четверг', 'Пятница', 'Суббота'
   // ];
   //
   // foreach($dates as $d){
   //     $dayOfWeek = array(
   //         'date' => $d,
   //         'dayOfWeek' => date("w", strtotime($d) )
   //     );
   // }
  //$date = date('l', $date);
 // d($dates);
   
   $smarty->assign('pageTitle', $nameCity);
   $smarty->assign('rsWeather', $rsWeather);
   //d($gg);
  
   loadTemplate($smarty, 'header');
   loadTemplate($smarty, 'search');
   loadTemplate($smarty, 'footer');
}