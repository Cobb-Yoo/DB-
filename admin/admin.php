<?
    session_start();
	include "./../connectDB.php";
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
        <div id = "login">
            관리자 | <a href='/login.html' style="text-decoration='none'"> 로그아웃 </a>
        </div>
        <div id = "title">강릉원주대학교 학사관리 시스템 - 관리자 모드</div>
	</div>
	<div class="middle">
        <? include "./nav.php"?>
	<div>
<div>
</body>
</html>