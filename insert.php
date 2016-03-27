<html>
<head>
<title>Test LMS</title>
</head>
<body>
<?php
session_start();
	$nm = $_SESSION['nm'];
	$sn = $_SESSION['sn'];
	$sex = $_SESSION['sex'];
	$cg = $_SESSION['cg'];
	$eg = $_SESSION['eg'];
	$sql = INSERT INTO students(Name,Surname,Sex,Chinese_Grade,English_Grade)
	VALUES($nm,$sn,$sex,$cg,$eg)
?>
</body>
</html>