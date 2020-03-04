<?php
 require 'header.php';

 ?>
<div class="article">
 <?php
if(isset($_SESSION['id']) AND isset($_SESSION['edit'])){
    
    ?>
    <div class="card">
    <?php
    echo $post->titre;
    ?>
    </div>
    <?php
}else{
        ?>
    <div class="card">
        <?php
        echo $post->titre.'<br />';
      
        ?>
        </div>
        <div class="pagination">
            <a href="index.php?controller=pagination&action=suivant&id_article=<?php echo $post->id_article; ?>">Suivant</a>
            <a href="index.php?controller=pagination&action=precedent&id_article=<?php echo $post->id_article; ?>">Precedent</a>
        </div>
        <?php
    }
    ?>
    </div>
