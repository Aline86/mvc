<?php 

class ConnexionLogin{
    
    public function loginconnexion(){
    
        $login=isset($_POST['login'])?$_POST['login']:"";
        $password=isset($_POST['pass'])?$_POST['pass']:"";
        $count=Login::checkLogin($login, $password);
        if($count==1){
            
            $role=Login::checkRole($login, $password);
            if($role=="admin"){
           
                $id=Login::checkId($login, $password);
              
                $_SESSION['id']=$id;
                $post=Article::getList();
                
                header('Location: index.php?controller=show&action=show');
                
            }else{
               
                $id=Login::checkId($login, $password);
               
                $_SESSION['id']=$id;
                $_SESSION['edit']=1;
                $post=Article::getList($_SESSION['id']);
                 
                header('Location: index.php?controller=show&action=show');
            }

      
    }else{
        echo 'Erreur d\'identifiants';
    }
}
}