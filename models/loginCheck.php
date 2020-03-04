<?php
 require_once 'connection.php';

 class Login{

public static function checkLogin($login, $password){
    $db = Db::getInstance();
    $requete="SELECT * FROM user WHERE login='".$login."'AND password='".$password."'";
    $reponse = $db->query($requete);
    $count = $reponse->rowCount();
    return $count;
  }

  public static function checkRole($login, $password){
  
    $db = Db::getInstance();
    $requete="SELECT role FROM user WHERE login='".$login."'AND password='".$password."'";
    $reponse = $db->query($requete);
    $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
    return $donnees['role'];
  }

  public static function checkId($login, $password){
 
    $db = Db::getInstance();
    $requete="SELECT id_user FROM user WHERE login='".$login."'AND password='".$password."'";
    $reponse = $db->query($requete);
    $donnees = $reponse->fetch(PDO::FETCH_ASSOC);
    return $donnees['id_user'];
  }

}