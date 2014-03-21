<?php 
	include_once('config.php');
	include_once('examDAO.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = sha1($_POST['password']);

	if($name !="" && $email !="" && $password !=""){
		$reg = examDAO::regUser($name, $email, $password);
		echo"success";
	}else{
		echo"failed"; 
	}
 ?>