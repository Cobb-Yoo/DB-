<?
    session_start();
    include "../../connectDB.php";
	
    $aid = $_POST['aid'];
    $did = $_POST['did'];
    $aname = $_POST['aname'];
    $password = $_POST['password'];

    $query = "select * from assistant where pid='$pid'";
	$result = mysql_query($query, $connect);
    $len = mysql_num_rows($result);

    if($len >= 1){
        echo '<script>alert("�̹� ��ϵ� ���̵��Դϴ�. �ٽ� �Է����ּ���")</script>';
        echo '<script>window.location = "./editAssistant.php"</script>';
    }
    else if($len == 0){
        $query = "insert into assistant value('$aid', '$aname', '$did')";
	    $result = mysql_query($query, $connect);
        $query = "insert into users value('$aid', '$password', '$aid')";
	    $result = mysql_query($query, $connect);

        echo '<script>alert("��������� �Ϸ��߽��ϴ�.")</script>';
        echo '<script>window.location = "./manageAssistant.php"</script>';
    }
?>