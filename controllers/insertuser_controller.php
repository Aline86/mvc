<?php
class NewUser{
    public function inserer(){
        require_once('views/pages/newUser.php');
    }

    public function insert(){
       
        
            addNewUser::addUser($_POST['loginNewUser'], $_POST['passNewUser'], $_POST['email']);

            require_once('views/utilisateur/index.php');
        }

}