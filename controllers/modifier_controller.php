<?php
class ModifierController{

    public function modifier(){
        require_once('views/layout.php');
        $article=Article::get($_GET['id']);
       
        require_once('views/utilisateur/modifier.php');
    }


    public function modifierArticle(){
    
            Article::update($_POST['titre'], $_POST['description'], $_POST['date'], $_POST['id_article']);
            if(isset($_SESSION['id'])){
                $id=$_SESSION['id'];
                header('Location: index.php?controller=show&action=show');
                
            }else{
                $post=Article::getList();
                header('Location: index.php?controller=show&action=show');
                
            }

        }
    }

    ?>