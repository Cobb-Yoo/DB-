<?
    session_start();
	include "../../connectDB.php";

    $cid = $_POST['data'];

    $query = "delete from course where cid = '$cid'";
	$result = mysql_query($query, $connect);

    header("Location: ./course.php");
?>