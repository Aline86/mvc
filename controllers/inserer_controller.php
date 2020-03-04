<?php 
class InsererController{
  

    public function inserer(){
        require_once('views/utilisateur/ajouter.php');
    }

    public function insererArticle(){

            ob_start();
            Article::add($_SESSION['id'], $_POST['titre'], $_POST['description'], $_POST['date']);
            
            header('Location: index.php?controller=show&action=show');
       
    }

}