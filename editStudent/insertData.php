<?
    session_start();
    include "../connectDB.php";
	
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $grande = $_POST['grande'];
    $registeted = $_POST['registeted'];
    $did = $_POST['did'];
    $ssn = $_POST['ssn'];
    $colid = $_POST['colid'];
    $cos = $_POST['cos'];

    $query = "update student set sname = '$sname' where sid = '$sid'";
    $result = mysql_query($query,$connect);
    $query = "update student set grande = '$grande' where sid = '$sid'";
    $result = mysql_query($query,$connect);
    $query = "update student set registeted = '$registeted' where sid = '$sid'";
    $result = mysql_query($query,$connect);
    $query = "update student set did = '$did' where sid = '$sid'";
    $result = mysql_query($query,$connect);
    $query = "update student set ssn = '$ssn' where sid = '$sid'";
    $result = mysql_query($query,$connect);
    $query = "update student set colid = '$colid' where sid = '$sid'";
    $result = mysql_query($query,$connect);
    $query = "update student set cos = '$cos' where sid = '$sid'";
	$result = mysql_query($query,$connect);

    
    //강제이동
    header("Location: ../mangeStudent/mangeStudent.php");
?>