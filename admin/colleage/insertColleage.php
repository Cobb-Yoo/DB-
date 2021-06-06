<?
    session_start();
    include "../../connectDB.php";

    $colid = $_POST['colid'];
    $colname = $_POST['colname'];

    $query = "select * from colleage where colid='$colid'";
	$result = mysql_query($query, $connect);
    $len = mysql_num_rows($result);

    if($len >= 1){
        echo '<script>alert("이미 등록된 대학코드입니다. 다시 입력해주세요")</script>';
        echo '<script>window.location = "./manageColleage.php"</script>';
    }
    else if($len == 0){
        $query = "insert into colleage value('$colid', '$colname')";
	    $result = mysql_query($query, $connect);

        echo '<script>alert("대학등록이 완료했습니다.")</script>';
        echo '<script>window.location = "./manageColleage.php"</script>';
    }
?>