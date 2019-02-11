<?php
class Route{
    static function start(){
        //Controller and action by default
        $controller_name = 'Main';
        $action_name = 'index';

        //Get controller and action by URL
        $url = $_SERVER["REQUEST_URI"];
        $routes = explode("/",$url);

        if (!empty($routes[1])){
            if (strripos($routes[1],"?"))$controller_name = substr($routes[1],0,strripos($routes[1],"?"));
            else $controller_name = $routes[1];
        }
        if (!empty($routes[2])){
            if (strripos($routes[2],"?"))$action_name = substr($routes[2],0,strripos($routes[2],"?"));
            else $action_name = $routes[2];
        }

        //Get model,contr and action w prefixes
        $model_name = "Model_$controller_name";
        $controller_name = "Controller_$controller_name";
        $action_name = "action_$action_name";

        //Get model file
        $model_file = strtolower($model_name);
        $model_path = "application/models/$model_file.php";
        if (file_exists($model_path))include $model_path;

        //Get controller file

        $controller_file = strtolower($controller_name);
        $controller_path = "application/controllers/$controller_file.php";
        if (file_exists($controller_path))include $controller_path;
        else include "application/controllers/controller_404.php";

        $controller = new $controller_name();
        $action = $action_name;

        if (method_exists($controller,$action))$controller->$action();
        else include "application/controllers/controller_404.php";
    }

}