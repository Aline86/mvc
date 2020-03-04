<?php 
 
 require_once 'views/layout.php';


if(isset($_GET['controller']) AND isset($_GET['action'])){
    $controller=$_GET['controller'];
    $action=$_GET['action'];
}else{
    $controller="login";
    $action="login";
}

require_once 'routes.php';
?>