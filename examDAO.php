<?php 
	class ExamDAO{
		public static function regUser($name, $email, $password){
			global $db;
			$sql = "INSERT INTO `user`(`id`,`name`,`email`,`password`) VALUES (NULL, '$name','$email','$password')";
		 	$reg = $db->query($sql);
		 	if($reg){
		 		echo "success from php";
		 	}
		 	else{
		 		echo "failed from php";
		 	}
		}
		public static function logUser($name, $password){
			global $db;
			$sql = "SELECT * from user WHERE name = '{$name}' and password ='{$password}'";
			$log = $db->query($sql);
			if($log->num_rows > 0){
				echo "<script>
						alert('Login Succesfully.');
						window.location.href='question.php';
					 </script>";
			}
			else{
				echo "failed";
			}

			
		}
		
	public static function getAnswer($id) {
		global $db;
		if($id<=10){
			$query = "SELECT *
					  from questions_tb  
					  where id = '{$id}'";		

			$result = $db->query($query);
				return $row = $result->fetch_assoc();
			
		}else{
		return false;
		}
	}

	public static function FindAnswer()
	{
		global $db;
		$sql = "SELECT * FROM questions_tb order by id";
		$result = $db->query($sql);
		$array = array();
		while ($row = $result->fetch_assoc()) {
			$array[] = $row['answer'];
		}
		return $array;
		return $result->fetch_assoc();
	}

	public static function GetResult($answer)
	{
		$correct = self::FindAnswer();
		if($correct === false){
			error_log("not ready");
			return false;
		}
		if((count($correct) != strlen($answer))){
			error_log("not ready");
			return false;
		}
		$val = 0;
		for ($i=0; $i < 10 ; $i++) { 
			if ($correct[$i] == $answer[$i]) {
				$val++;
			}
		}
		return $val;
	}
}
 ?>
