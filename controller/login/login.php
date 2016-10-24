<?php
	session_start();
	include_once($_SERVER['DOCUMENT_ROOT'].'/model/get_user.php');

  $user = get_user($_POST['email'], $_POST['password']);

  if($user) {// If login is correct
    $_SESSION['user'] = $user;
    header('Location: /');
  } else
    header('Location: /index.php?loginError=1');
?>
