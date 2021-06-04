<?
    session_start();
    include "../../connectDB.php";
	
    $sid = $_POST['sid'];
    $cid = $_POST['cid'];
    $record = $_POST['record'];
    $yterm = $_POST['yterm'];

    
    $query = "update class set record = '$record', yterm = '$yterm' where sid = '$sid' and cid = '$cid'";;
	$result = mysql_query($query,$connect);
     
    //강제이동
    header("Location: ../addRecord/addRecord.php");
?>