<?php

class DeconnectionController{
    public function deconnection(){
        ob_start();
       unset($_SESSION['id']);
       unset($_SESSION['edit']);
       require_once('views/pages/login.php'); 
    }
}