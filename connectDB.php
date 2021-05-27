<?
    $database = "teamplay";
	$connect=mysql_connect('localhost','root', 'apmsetup')or die("mySQL 서버 연결 Error!");
	mysql_select_db($database, $connect);
?>