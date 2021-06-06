<?
    session_start();
    include "../../connectDB.php";

    $did = $_POST['did'];
    $dname = $_POST['dname'];

    $query = "select * from dept where did='$did'";
	$result = mysql_query($query, $connect);
    $len = mysql_num_rows($result);

    if($len >= 1){
        echo '<script>alert("이미 등록된 학과코드입니다. 다시 입력해주세요")</script>';
        echo '<script>window.location = "./manageDept.php"</script>';
    }
    else if($len == 0){
        $query = "insert into dept value('$did', '$dname')";
	    $result = mysql_query($query, $connect);

        echo '<script>alert("학과등록이 완료했습니다.")</script>';
        echo '<script>window.location = "./manageDept.php"</script>';
    }
?>