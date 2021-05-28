<?
	include "../connectDB.php";
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title> 강릉원주대학교 </title>
</head>
<style>
	.top {
		height:100px;
		width : 1900px;
	}
	#login {
		text-align:right;
		margin:10px;
	}
	#title {
		font-size:3.5em;
		font-weight: 550;
		margin:10px;
	}

	.navi {
		float:left;
		height: 100%;
		width:200px;
		margin:5px;
		border-right: 2px solid gray;
	}
	.naviStyles {
		padding:10px;
		font-size:1.5em;
		font-weight:200;
		font-weight: 550;
	}
	.navi div div:hover {
		text-align : center;
		color : rgb(41, 128, 185);
		background-color:rgba(41, 128, 185, 0.17);
	}

	.conts_div {
		margin-left:10px;
		display:inline-block;
		height:100%;
		width: 1670px;
	}
	
	#cont {
		margin:10px;
		height:70%;
	}
	#cont_title {
		padding-left : 2px;
		margin:10px;
		background-color:rgba(41, 128, 185, 0.17);
		font-size: 3em;
		font-weight: 550;
	}
	.cont_item{
		display: inline-block;
	}
	
	.middle {
		height:600px;
		width : 1900px;
		margin-top : 35px;
	}
	
</style>
<body> 
<div>
	<div class="top">
		<div id = "login">로그인 | 로그아웃</div>
		<div id = "title">강릉원주대학교 학사관리 시스템 </div>
	</div>
	<div class="middle">
	    <?include "../nav.php"?>
		
		<?include "register_CON.php"?>
	<div>
<div>
</body>
</html>