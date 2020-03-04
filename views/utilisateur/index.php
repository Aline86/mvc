
<?php 
require 'header.php';
if(isset($post)){
  ?>
  
  <p>Here is a list of all articles:</p>
  <div class="article">
  <?php
foreach($post as $article){
  ?>
  <div class="card">
  <?php
  echo $article->titre.' '.$article->description;
   ?>
 
 <a href='index.php?controller=delete&action=supprimer&id_user=<?php echo $article->id_user; ?>'>supprimer</a>
 <a href='index.php?controller=modifier&action=modifier&id=<?php echo $article->id_user; ?>'>modifier</a>
 <br />
</div>

<?php
 
}
?>
</div>
<?php
}else{
  header('Location: index.php?controller=inserer&action=inserer');
}
