<?php
	//Iniciamos sesión.
	session_start();
	//Destruimos la sesión.
	session_destroy();
    header("Location: Home.php");
?>