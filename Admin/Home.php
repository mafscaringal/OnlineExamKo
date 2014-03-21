<?php 
	session_start();
 ?>
<html>
	 <head>
	 	<title>Admin Page</title>
	 </head>
	 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	 <body>
	 	<div id = 'back-endAdmin' class = 'well container'>
	 		<div id  = "header" class = "page-header">
	 			<h1 id = "head"><center><font face = 'serif'>Admin Home Page</font></center></h1>
	 		</div>
	 		<div class = "span">
	 			<div id = "img">
	 				<div id = "adminName">
	 					<?=$_SESSION['f_name']?> <?=$_SESSION['l_name']?>
	 				</div>
	 				<div id = "category">
	 					Admin
	 				</div>
	 				<a href="logout.php"><button class = "btn btn-danger" id = "logout">Logout</button></a>
	 			</div>
	 		</div>
	 		<div class = "span well" id = 'choice'>
	 			<div><a href="questions.php"><button>Result</button></a></div>
	 			<div><a href="UserFront.php"><button>User</button></a></div>
	 			<div><a href="GenerateReport.php"><button>Question</button></a></div>
	 		</div>
	 	</div>
	 </body>
 </html>
