<?
    session_start();
    include "../../connectDB.php";

    $did = $_POST['did'];
    $dname = $_POST['dname'];

    $query = "select * from dept where did='$did'";
	$result = mysql_query($query, $connect);
    $len = mysql_num_rows($result);

    if($len >= 1){
        echo '<script>alert("�̹� ��ϵ� �а��ڵ��Դϴ�. �ٽ� �Է����ּ���")</script>';
        echo '<script>window.location = "./manageDept.php"</script>';
    }
    else if($len == 0){
        $query = "insert into dept value('$did', '$dname')";
	    $result = mysql_query($query, $connect);

        echo '<script>alert("�а������ �Ϸ��߽��ϴ�.")</script>';
        echo '<script>window.location = "./manageDept.php"</script>';
    }
?>