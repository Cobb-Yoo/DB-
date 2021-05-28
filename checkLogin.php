<?
	session_start();
	include "connectDB.php";
	
	$php_id = $_POST['html_id'];
	$php_password = $_POST['html_password'];

	$query = "select * from users where id = '$php_id' and password = '$php_password'";

	$result = mysql_query($query, $connect);
	$cnt = mysql_num_rows($result);
	
	if($cnt == 1){
		$info=mysql_fetch_array($result);
		$_SESSION['user_id'] = $info[2];

		Header ("Location: ./register/register.php");
	}
	else{
		echo "´Ù½Ã!";
	}
    
?>