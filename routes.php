<?php ob_start();
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'insertuser':
        require_once('models/user.php');
        $controller = new NewUser();
      break;
        case 'modifier':
          require_once('models/articles.php');
          $controller = new ModifierController();
        break;
    

          case 'show':
            require_once('models/articles.php');
            $controller = new ShowController();
          break;
      

      case 'deconnection':
       
        $controller = new DeconnectionController();
      break;

        case 'delete':
          require_once('models/articles.php');
          $controller = new SupprimerController();
        break;

      case 'inserer':
        require_once('models/articles.php');
        $controller = new InsererController();
      break;

      case 'login':
        require_once('models/loginCheck.php');
        $controller = new LoginController();
      break;

      case 'connexion':
        require_once('models/loginCheck.php') ;
        require_once('models/articles.php') ;
        $controller = new ConnexionLogin();
      break;
      case 'pagination':
        require_once('models/articles.php');
        $controller = new Pagination;
     
      }

      $controller->{ $action }();
    
  }
  

  // we're adding an entry for the new controller and its actions
  $controllers = array(
                        'deconnection' => ['deconnection'],
                        'inserer' => [ 'inserer', 'insererArticle'],
                        'show' => ['show'],
                        'login' => ['login'],
                        'modifier' => ['modifierArticle', 'modifier' ],
                        'delete' => ['supprimer'],
                        'connexion' =>['loginconnexion'],
                        'insertuser' => ['insert'],
                        'pagination' => ['getarticle', 'suivant', 'precedent'],
                        'insertuser' => ['inserer', 'insert']);
 
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
   
  } else {
    echo 'L\'action n\'existe pas';
  }
  }else {
    echo 'Le controller n\'existe pas';
  }
?>