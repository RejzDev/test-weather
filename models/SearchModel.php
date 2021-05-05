<?php
    /** Weather data file*/

function getWeatherDate($nameCity){
    $nameCity = htmlspecialchars($nameCity);

    $rs = curlWeather($nameCity);
    
    return $rs;
}