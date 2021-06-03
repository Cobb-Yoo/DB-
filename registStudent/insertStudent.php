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

    $query = "insert into student values('$sid','$sname','$grade','$registeted','$did','$ssn','$colid','$cos')";
	$result = mysql_query($query,$connect);

    //강제이동
    header("Location: ./registStudent.php");
?>