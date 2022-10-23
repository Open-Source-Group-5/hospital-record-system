<?php
    
    	session_start();


	//this unset all the session set
	session_destroy();

	header('Location:index.php');
?>