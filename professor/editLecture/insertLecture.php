<?
    session_start();
    include "../../connectDB.php";
	
    $pid = $_SESSION['user_id'];
    $cname = $_POST['cname'];
    $state = $_POST['state'];
    $grade = $_POST['grade'];
    $days = $_POST['days'];
    $how = $_POST['how'];

    $query = "insert into course values('','$cname','$pid','$state','$grade','$days','$how')";
	$result = mysql_query($query,$connect);

    //�����̵�
    header("Location: ./editLecture.php");
?>