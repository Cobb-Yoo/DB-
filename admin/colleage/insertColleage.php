<?
    session_start();
    include "../../connectDB.php";

    $colid = $_POST['colid'];
    $colname = $_POST['colname'];

    $query = "select * from colleage where colid='$colid'";
	$result = mysql_query($query, $connect);
    $len = mysql_num_rows($result);

    if($len >= 1){
        echo '<script>alert("�̹� ��ϵ� �����ڵ��Դϴ�. �ٽ� �Է����ּ���")</script>';
        echo '<script>window.location = "./manageColleage.php"</script>';
    }
    else if($len == 0){
        $query = "insert into colleage value('$colid', '$colname')";
	    $result = mysql_query($query, $connect);

        echo '<script>alert("���е���� �Ϸ��߽��ϴ�.")</script>';
        echo '<script>window.location = "./manageColleage.php"</script>';
    }
?>