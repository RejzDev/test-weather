<?php
    include_once "../models/SearchModel.php";

function indexAction($smarty){
    
   $nameCity = $_GET['nameCity'];
   if (! $nameCity){
       redirect("/");
       return;
   }
    
   
   $rsWeather = getWeatherDate($nameCity);
   //d($rsWeather);
  // $f = count($rsWeather->list);
  //d($f);
    $dates = array();
    $datesCnt = count($rsWeather->list);
    for($i = 0; $i < $datesCnt; $i++){
        $dates[] = [$rsWeather->list[$i]->dt_txt];
    }
    //d($date);
    //$dates = [$rsWeather->list[0]->dt_txt,$rsWeather->list[9]->dt_txt];
    
    $days = [
        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Суббота'
    ];
    
  //  foreach($dates as $d){
  //      $dayOfWeek[] = array(
  //          'date' => $d,
  //          'dayOfWeek' => $days[ date("w", strtotime($d) )]
  //      );
  //  }
   // d($dayOfWeek);
  
   $smarty->assign('pageTitle', $nameCity);
   $smarty->assign('rsWeather', $rsWeather);
   $smarty->assign('datesCnt', $datesCnt);

   loadTemplate($smarty, 'header');
   loadTemplate($smarty, 'search');
   loadTemplate($smarty, 'footer');
}