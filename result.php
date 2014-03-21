<?php 
include 'config.php';
include 'examDAO.php';
session_start();
$answer =  $_SESSION['answer'];
$sql = examDAO::GetResult($answer);
 ?>
 <h1><?=$sql?></h1>