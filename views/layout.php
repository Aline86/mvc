<DOCTYPE html>
<html>
  <?php require 'header.php'; ?>
    <header>
        
    

    <?php

    session_start();
    
    if(isset($_SESSION['id'])){
   
        ?>
        <a class="hyper" href='index.php?controller=inserer&action=inserer'>Ajouter article</a>
        <a class="hyper" href="index.php?controller=show&action=show">Home</a>
        <a class="hyper" href="index.php?controller=deconnection&action=deconnection">Se déconnecter</a>
      
        
            
         <?php 
    }else {
     
        ?>
        <a href="index.php?controller=login&action=login">Home</a>
        <?php
 
    }

  
     ?>
    </header>
    <footer>
  
    </footer>
  <body>
<html>