<?php

     /**
     * Main functions
     */

    /**
     * Formation of the requested page
     *
     * @param string $controllerName Controller name
     * @param string $actionName name of the page processing function
     */
    function loadPage($smarty, $controllerName, $actionName = 'index') {
        include_once PathPrefix . $controllerName . PathPostfix;
         $function = $actionName . 'Action';
        $function($smarty);
    }

    /**
     * Download tamplate
     *
     * @param object $smarty object Smarty
     * @param string $templateNeme  template fle name
     */
    function loadTemplate($smarty, $templateNeme) {
        $smarty->display( $templateNeme . TemplatePostfix);
    }

/**
 * Debag
 *
 */
    function d ($value = null, $die = 1) {
        echo 'Debug: <br /><pre>';
        print_r($value);
        echo '</pre>';

        if($die) die;
    }

    function createSmartyRsArray($rs){
        if (! $rs) return false;

            $smartyRs = array();
            while ($row = mysqli_fetch_assoc($rs)){
                $smartyRs[] = $row;
        }
        return $smartyRs;
    }

    /**
     * Redirect
     *
     * @params string $url
     */
    function redirect($url){
        if (! $url) $url = "/";
        header("Location: {$url}");
        exit();
    }
    
    function curlWeather($nameCity){
        $apiKey = "6357d254ee33ae430188bd08261117d1";
        $cityName = trim($nameCity);
        $apiUrl = "api.openweathermap.org/data/2.5/forecast?q=" . $cityName . "&lang=ua" . "&appid=" . $apiKey . "&units=metric";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $head = curl_exec($ch);
        curl_close($ch);
        $data = json_decode($head);
        
        return $data;
}