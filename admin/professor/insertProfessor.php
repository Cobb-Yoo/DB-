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
        echo '<script>alert("�̹� ��ϵ� ���̵��Դϴ�. �ٽ� �Է����ּ���")</script>';
        echo '<script>window.location = "./manageProfessor.php"</script>';
    }
    else if($len == 0){
        $query = "insert into professor value('$pid', '$pname', '$did')";
	    $result = mysql_query($query, $connect);
        $query = "insert into users value('$pid', '$password', '$pid')";
	    $result = mysql_query($query, $connect);

        echo '<script>alert("��������� �Ϸ��߽��ϴ�.")</script>';
        echo '<script>window.location = "./manageProfessor.php"</script>';
    }
?>