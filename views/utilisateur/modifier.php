<?php 
require 'header.php';
ob_start();

?>
    <form method="POST" action="index.php?controller=modifier&action=modifierArticle">
        <textarea name="titre" value="<?php echo $article->titre; ?>" placeholder="titre"></textarea>
        <br />
        <textarea name="description" value="<?php echo $article->description; ?>" placeholder="description"></textarea>
        <br />
        <input type="date" name="date" value="<?php echo $article->date; ?>" />
        <br />
        <input type="hidden" name="id_article" value="<?php echo $article->id_article; ?>" />
        <br />
        <input type="submit" />
    </form>
    
  