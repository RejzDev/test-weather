<?php
    /** Файл для роботи з даними Weather*/

function getWeatherDate($nameCity){
    $nameCity = htmlspecialchars($nameCity);
    
    $rs = curlWeather($nameCity);
    
    
    
    return $rs;
}