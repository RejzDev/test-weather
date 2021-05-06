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
    $dataWeather = array();
    $datesCnt = count($rsWeather->list);
    for($i = 0; $i < $datesCnt; $i++){
       
        $dates[] = $rsWeather->list[$i]->dt_txt;
    }
 // d($dataWeather);
  
    $days = [
        'Неділя', 'Понеділок', 'Вівторок', 'Середа',
        'Четвер', "П'ятница", 'Субота'
    ];
    $months = [
        "1" => 'Січень',  "2" => 'Лютий',  "3" => 'Березень',  "4" => 'Квітень',
        "5" => 'Травень',  "6" => 'Червень',  "7" => 'Липень',  "8" => 'Серпень',
        "9" => 'Вересень',  "10" => 'Жовтень',  "11" => 'Листопад',
        "12" => 'Грудень'
    ];
    $dayOfWeek = array();
         foreach($dates as $d){
             $dayOfWeek[] =  [
                 'date' => $d,
                 'dayOfWeek' => $days[ date("w", strtotime($d) )],
                 'months' => $months[ date("n", strtotime($d) )]
             ];
         }
    //d($dayOfWeek);
  //  echo $dayOfWeek[0]
  
   $smarty->assign('pageTitle', $nameCity);
   $smarty->assign('rsWeather', $rsWeather);
   $smarty->assign('dayOfWeek', $dayOfWeek);

   loadTemplate($smarty, 'header');
   loadTemplate($smarty, 'search');
   loadTemplate($smarty, 'footer');
}