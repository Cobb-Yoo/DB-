<?
	session_start();
	include "../../connectDB.php";
	$sid = $_POST['data'];
	$nameData = $_POST['nameData'];
?>

<!DOCTYPE HTML>
<html>
<head>
<title> 강릉원주대학교 </title>
<link rel="stylesheet" href="../../css/normal.css" type="text/css">
</head>

<body> 
<div>
	<div class="top">
		<? include "../title.php"?>
	</div>
	<div class="middle">
	    <?include "../nav.php"?>
		
		<?include "editStudent_CON.php"?>
	<div>
<div>
</body>
</html>