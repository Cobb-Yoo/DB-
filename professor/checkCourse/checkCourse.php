<?
    session_start();
	include "../../connectDB.php";
	$cname = $_POST['cname'];
?>

<html>
<head>
	<title> �������ִ��б� </title>
	<link rel="stylesheet" href="../../css/normal.css" type="text/css">
</head>
<body>
	<div class="top">
		<?include "../title.php"?>
	</div>
	<div class="middle">
	    <?include "../nav.php"?>
		
		<?include "checkCourse_CON.php"?>
	<div>
</body>
</html>