<?
    session_start();
	include "../../connectDB.php";

    $cid = $_POST['data'];

    $query = "delete from class where cid = '$cid'";
	$result = mysql_query($query, $connect);

    header("Location: ./course.php");
?>