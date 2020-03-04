<?php 

class ShowController{
    public function show(){
        
        if(isset($_SESSION['id']) AND isset($_SESSION['edit'])){
            $id=$_SESSION['id'];
            $post=Article::getList($id);
            require_once('views/utilisateur/index.php');
        }else{
            $post=Article::getList();
            require_once('views/utilisateur/index.php'); 
        }
        
    }

}
