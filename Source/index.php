<?php
    if(!isset($_COOKIE["username"])){
        $controller = "Home";
        $action = "login";
    }else{
        $controller = (isset($_GET['controller']))?ucfirst(strtolower($_GET["controller"])):"Home";
        if(isset($_GET["action"]))
            $action = strtolower($_GET["action"]);
        else $action = "index";
    }
    $controller = $controller.'Controller';
    require 'Controller/'.$controller.'.php';
    $controllerObj = new $controller;
    if($action === "watch"){
        $controllerObj->$action($_GET["link"]);
    }else
        $controllerObj->$action();
?>