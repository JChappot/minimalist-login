<?php
	session_start();
  if($_SESSION['user']) // user connected
    include_once('view/home/index.php');
  else {
		include_once('view/login/index.php');
		if($_GET['loginError'])
			include_once('view/login/error.php');
	}
?>
