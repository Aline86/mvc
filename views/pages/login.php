<?php require 'header.php'; ?>
<p>Connexion :</p>
<form method="POST" action="index.php?controller=connexion&action=loginconnexion">
<input type="text" name="login" placeholder="login" />

<input type="password" name="pass" placeholder="mot de passe" />

<input type="submit" />
</form>
<p>New user:
<a href="index.php?controller=insertuser&action=inserer">Nouvel utilisateur</a></p>

<br />
<?php

require 'models/articles.php';
?>
<div class="article">
    <?php
    $articles=Article::getList();
    
    foreach($articles as $article){
        ?>
    <div class="card">
    <?php
        echo '<h3>'.$article->titre.' '.$article->date.'<br /></h3>';
        ?>
        <a href="index.php?controller=pagination&action=getarticle&id_article=<?php echo $article->id_user; ?>" >visualiser</a><br />
        </div>
       <?php
    }
    ?>
    
</div>