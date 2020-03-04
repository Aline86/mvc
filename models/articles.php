<?php
 require_once 'connection.php';
  class Article {
    public $id_article;
    public $id_user;
    public $titre;
    public $description;
    public $date;
    public function __construct($id_article, $id_user, $titre, $description, $date)
    {
      $this->id_article=$id_article;
      $this->id_user=$id_user;
      $this->titre=$titre;
      $this->description=$description;
      $this->date=$date;
    }
    public static function suivant($id){
      require_once 'connection.php';
        $db = Db::getInstance();
      $requete=$db->query('SELECT * FROM article WHERE id_article>'.$id.' AND id_article!="" LIMIT 1');
      
      $donnees = $requete->fetch(PDO::FETCH_ASSOC);

      if($donnees['id_article']!=""){
        return new Article($donnees['id_article'], $donnees['id_user'] , $donnees['titre'], $donnees['description'], $donnees['date'] );

      }else{
        $requete=$db->query('SELECT * FROM article');
        while($donnees = $requete->fetch(PDO::FETCH_ASSOC)){;
        return new Article($donnees['id_article'], $donnees['id_user'], $donnees['titre'], $donnees['description'], $donnees['date'] );
      }
    }
      
  }

    public static function precedent($id){
      require_once 'connection.php';
        $db = Db::getInstance();
        $requete=$db->query('SELECT * FROM article WHERE id_article<'.$id.' AND id_article!="" ORDER BY id_article DESC LIMIT 1');
        $donnees = $requete->fetch(PDO::FETCH_ASSOC);

        if($donnees['id_article']!=""){
      
          return new Article($donnees['id_article'], $donnees['id_user'], $donnees['titre'], $donnees['description'], $donnees['date'] );

            }else{
              $requete=$db->query('SELECT * FROM article ORDER BY id_article DESC LIMIT 1');
            while($donnees = $requete->fetch(PDO::FETCH_ASSOC)){
              return new Article($donnees['id_article'], $donnees['id_user'], $donnees['titre'], $donnees['description'], $donnees['date'] );
            }
    }
    
  }
  public static function add($user, $titre, $description, $date)
  {
    require_once 'connection.php';
    $db = Db::getInstance();
    $q = $db->prepare('INSERT INTO article(id_user, titre, description, date) VALUES(:user, :titre, :description, :date)');

    $q->bindValue(':user', $user);
    $q->bindValue(':titre', $titre);
    $q->bindValue(':description', $description);
    $q->bindValue(':date', $date);

    $q->execute();
    
  }

  

  public static function delete($id)
  {
    $db = Db::getInstance();
    $db->exec('DELETE FROM article WHERE id_article = '.$id);
  }

  public static function get($id)
  {
    $id = (int) $id;
    $post=[];
    $db = Db::getInstance();
    $q = $db->query('SELECT * FROM article WHERE id_article= '.$id);
 
    $donnees = $q->fetch(PDO::FETCH_ASSOC);


    return new Article($donnees['id_article'], $donnees['id_user'],  $donnees['titre'], $donnees['description'], $donnees['date'] );
  }

  public static function getList()
  {
    $persos = [];
    $db = Db::getInstance();
    if(isset($_SESSION['id'])){
      $id=$_SESSION['id'];
    $q = $db->query('SELECT * FROM article WHERE id_user="'.$id.'"');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $articles[] = new Article($donnees['id_user'], $donnees['id_article'], $donnees['titre'], $donnees['description'], $donnees['date'] );
     
    }

    return $articles;
  }else{
    $q = $db->query('SELECT * FROM article');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $articles[] = new Article($donnees['id_user'], $donnees['id_article'], $donnees['titre'], $donnees['description'], $donnees['date'] );
     
    }

    return $articles;
  }
  }

  public static function update($titre, $description, $date, $id)
  { 
    $db = Db::getInstance();

    $requete='UPDATE article SET titre="'.$titre.'", description="'.$description.'", date="'.$date.'" WHERE id_article="'.$id.'"';
    $query=$db->query($requete);
    echo $titre;
    echo $id;
    if($query===TRUE){
      echo 'ok';
    }else{
      echo 'nok';
    };
    
    

  }

  
  }  
?>