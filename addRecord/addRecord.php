<?
	include "../connectDB.php";
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title> 강릉원주대학교 </title>
	<link rel="stylesheet" href="../css/normal.css" type="text/css">
</head>
<body> 
<div>
	<div class="top">
		<div id = "login">로그인 | 로그아웃</div>
		<div id = "title">강릉원주대학교 학사관리 시스템 </div>
	</div>
	<div class="middle">
	    <?include "../nav.php"?>
		
		<?include "addRecord_CON.php"?>
	<div>
<div>
</body>
</html>