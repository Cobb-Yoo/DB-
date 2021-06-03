<?
    session_start();
    include "../connectDB.php";
	
    $sid = $_SESSION['user_id'];
    $sname = $_POST['sname'];
    $cname = $_POST['cname'];
    $grade = $_POST['grade'];

    
    $query = "insert into class values('','$cname','$pid','$state','$grade','$days','$how')";
	$result = mysql_query($query,$connect);

    
	mysql_close($connect);
    //강제이동
    header("Location: ./addRecord.php");
?>