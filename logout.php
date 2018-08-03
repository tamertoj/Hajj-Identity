<?php
	session_start();
	
	session_destroy();
	//header('Location: ../security/index.php?ac=logout');
	header('Location: index.php');
?>