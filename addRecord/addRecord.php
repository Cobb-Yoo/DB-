<?
	include "../connectDB.php";
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title> �������ִ��б� </title>
	<link rel="stylesheet" href="../css/normal.css" type="text/css">
</head>
<body> 
<div>
	<div class="top">
		<div id = "login">�α��� | �α׾ƿ�</div>
		<div id = "title">�������ִ��б� �л���� �ý��� </div>
	</div>
	<div class="middle">
	    <?include "../nav.php"?>
		
		<?include "addRecord_CON.php"?>
	<div>
<div>
</body>
</html>