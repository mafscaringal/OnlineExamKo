<?php 
	include_once('config.php');
	include_once('examDAO.php');

	$name = $_POST['user'];
	$password = sha1($_POST['pass']);

	if($name != "" && $password != ""){
		$log = examDAO::logUser($name, $password);
		echo "<script>
						alert('Login Succesfully.');
						window.location.href='question.php';
					 </script>";
	}else{
		echo "failed from php";
	}
 ?>