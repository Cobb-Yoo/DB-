<?
    session_start();
	include "../../connectDB.php";

    $prePass = $_POST['prePass'];
    $checkPass = $_POST['checkPass'];
    $postPass = $_POST['postPass'];

    $user_id = $_SESSION['user_id'];

    $query = "select password from users where sid = '$user_id'";
	$result = mysql_query($query, $connect);
    $info = mysql_fetch_array($result);

    if($prePass == $info[0]){
        if($checkPass == $postPass){
            $query = "update users set password = '$postPass' where sid = '$user_id'";
            $result = mysql_query($query, $connect);
        }
    }

    header("Location: ../regist/regist.php");
?>
