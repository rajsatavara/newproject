<?php

	session_start();
	
	//session_detroy();
	
	unset($_SESSION["adid"]);
	unset($_SESSION["adunm"]);
	
	header("location: ../index.php");

?>