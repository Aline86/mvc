<?php
class addNewUser{
    public static function addUser($login, $pass, $email)
    {
        require_once 'connection.php';
        $db = Db::getInstance();
        $q = $db->prepare('INSERT INTO user(login, password, email, role) VALUES(:login, :password, :email, :role)');

        $q->bindValue(':login', $login);
        $q->bindValue(':password', $pass);
        $q->bindValue(':email', $email);
        $q->bindValue(':role', 'user');
      

        $q->execute();
        ob_start();
        $_SESSION['name']=1;
        $_SESSION['id']=$db->lastInsertId();
    }
}
  ?>