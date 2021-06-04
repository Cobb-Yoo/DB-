<?
    session_start();
	include "../../connectDB.php";

    $cid = $_POST['data'];
    $user_id = $_SESSION['user_id'];

    $query = "insert into class values('$user_id','$cid','','')";
	$result = mysql_query($query, $connect);

    header("Location: ./lecture.php");
?>