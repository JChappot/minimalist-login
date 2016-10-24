<?php
  try {
    $db = new PDO('mysql:host=localhost;dbname=db;charset=utf8', 'root', '3x14.c351');
  }
  catch(Exception $e) {
    die('Erreur : '.$e->getMessage());
  }
?>
