<?
    session_start();
    include "../connectDB.php";
	
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $grade = $_POST['grade'];
    $registeted = $_POST['registeted'];
    $did = $_POST['did'];
    $ssn = $_POST['ssn'];
    $colid = $_POST['colid'];
    $cos = $_POST['cos'];

    
    $query = "update student set sname = $sname, grade = $grade, registeted = $registeted, did = $did, ssn = $ssn, colid = $colid, cos = $cos where sid = $sid";
	$result = mysql_query($query,$connect);

    
	mysql_close($connect);
    //강제이동
    header("Location: ./editStudent.php");
?>