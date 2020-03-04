<?php 
require 'header.php';
require_once('views/layout.php');
ob_start(); ?>
<div class="article">
<form method="POST" action="index.php?controller=inserer&action=insererArticle">
    <textarea name="titre"></textarea>
    <br />
    <textarea name="description"></textarea>
    <br />
    <textarea name="resume"></textarea>
    <br />
    <input type="date" name="date" />
    <br />
    <input type="submit" />
</form>
</div>
<?php

