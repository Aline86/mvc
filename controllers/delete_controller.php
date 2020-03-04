<?php 

class SupprimerController{
    public function supprimer(){
        ob_start();
        if(isset($_SESSION['id'])){
            $id=$_SESSION['id'];
            $post=Article::delete($_GET['id_user']);
            $post=Article::getList($id);
            require_once('views/utilisateur/index.php');
        }else{
            $post=Article::delete($_GET['id_user']);
            $post=Article::getList();
            require_once('views/utilisateur/index.php'); 
        }
    }
}