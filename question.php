<?php 
	include_once('config.php');
	include_once('examDAO.php');
	session_start();
	define('Num', 10);
	
	$answer = (isset($_POST['answer']))?$_POST['answer']:"";
	$id = (isset($_POST['id']))?$_POST['id']+1:1;
	$answers = (isset($_POST['option']))?$_POST['option']:"";
	$answer .= $answers;
	$quest = ExamDAO::getAnswer($id);

	if ($id > Num) {
		$_SESSION['answer'] = $answer;
		header("Location: REsult.php");
		
	}

 ?>
 <script type="text/javascript" src = "jquery.1.10.2.js"></script>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$('#nextBtn').click(function(){
 			if($('#a').is(":checked")){
 				return true;
 			}else if($('#b').is(":checked")){
 				return true;
 			}else if($('#c').is(":checked")){
 				return true;
 			}else if($('#d').is(":checked")){
 				return true;
 			}else{
 				alert("Enter your answer");
 				return false;
 			}
 		});
 	});
 </script>
 <div id = "quest"><?php echo $quest['questions']; ?></div>
  <div id = "quest"><form method = "POST" action = "question.php" id = "nextForm">
  	<input hidden value = "<?=$id?>" name = "id">
  	<input hidden value = "<?=$answer?>" name = "answer">
					<input type = "radio" value = "a" name = "option" id = "a"><?=$quest['choicea']?><br>
					<input type = "radio" value = "b" name = "option" id = "b"><?=$quest['choiceb']?><br>
					<input type = "radio" value = "c" name = "option" id = "c"><?=$quest['choicec']?><br>
					<input type = "radio" value = "d" name = "option" id = "d"><?=$quest['choiced']?><br>
					<button id = "nextBtn">NEXT</button>
					</form></div>