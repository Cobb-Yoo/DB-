<?
    session_start();
    include "../../connectDB.php";
	
    $pid = $_POST['pid'];
    $did = $_POST['did'];
    $pname = $_POST['pname'];
    $password = $_POST['password'];

    $query = "select * from professor where aid='$aid'";
	$result = mysql_query($query, $connect);
    $len = mysql_num_rows($result);

    if($len >= 1){
        echo '<script>alert("이미 등록된 아이디입니다. 다시 입력해주세요")</script>';
        echo '<script>window.location = "./manageProfessor.php"</script>';
    }
    else if($len == 0){
        $query = "insert into professor value('$pid', '$pname', '$did')";
	    $result = mysql_query($query, $connect);
        $query = "insert into users value('$pid', '$password', '$pid')";
	    $result = mysql_query($query, $connect);

        echo '<script>alert("교수등록을 완료했습니다.")</script>';
        echo '<script>window.location = "./manageProfessor.php"</script>';
    }
?>