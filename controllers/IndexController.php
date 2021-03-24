<?php

    /**
     * Контролер главной страници
     */
    
    include_once '../library/mainFunctions.php';
    
    function testAction() {
        echo "IndexController.php > testAction";
    }

    /**
     * Формирование главной страници сайта
     * @param object $smarty шаблонизатор
     */
    function indexAction($smarty) {
    
    $cityName = 'London';
    
    $rsWeather = curlWeather($cityName);
    
    $smarty->assign('pageTitle', 'Главная страница');
    $smarty->assign('rsWeather', $rsWeather);
    //  d($rsWeather);
    
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}
    

