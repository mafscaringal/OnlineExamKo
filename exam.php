<?php 
define('QUESTION_NUMBERS', 10)
$q_number =(isset($_POST['q_number']))
				? $_POST['q_number']++
				: 1;
$answers = (isset($_POST['answers']))
				? $_POST['answers']))
				:'';
$answer = (isset($_POST['answer']))
				? $_POST['answer']
				:'';
$answers .=answer;
if($q_number > QUESTION_NUMBERS){
	session_start();
	$_SESSION['answers'] = $answers;
	header('Location: result.php');
}
$q = examDAO::getQuestion($q_number);
$question = $q['question'];?>
<!DOCTYPE html>
<html><head><title>Examination Pages</title></head><body></body></html>


 ?>