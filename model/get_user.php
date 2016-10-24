<?php
  include_once($_SERVER['DOCUMENT_ROOT'].'/config/db.php');
  function get_user($email, $password)
  {
    global $db;

    $query = $db->prepare('SELECT id, name, email FROM user WHERE email=:email AND password=:password');
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', sha1($password), PDO::PARAM_STR);

    $query->execute();
    return $query->fetch();
  }
?>
