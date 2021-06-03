<?
    $database = "teamplay";
	$connect=mysql_connect('localhost','root', 'apmsetup')or die("mySQL Connnct Error!");
	mysql_select_db($database, $connect);
?>