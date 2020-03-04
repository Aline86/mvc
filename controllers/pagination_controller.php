<?php

class Pagination {
    public function getarticle(){
        $post=Article::get($_GET['id_article']);
        require_once('views/utilisateur/show.php');
    }

    public function suivant(){
        $post=Article::suivant($_GET['id_article']);
        require_once('views/utilisateur/show.php');
    }

    public function precedent(){
        $post=Article::precedent($_GET['id_article']);
        require_once('views/utilisateur/show.php');
    }

}