<?
    session_start();
    include "../../connectDB.php";
	
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $grade = $_POST['grade'];
    $registeted = $_POST['registeted'];
    $did = $_POST['did'];
    $ssn = $_POST['ssn'];
    $colid = $_POST['colid'];
    $cos = $_POST['cos'];

    $password = substr($ssn,0,6);
    //�а�, ����, �ֹι�ȣ�� ���� �߰����� ������ �ʿ���
    //�а��̸����� �а����̵�� ��ȯ
    //�����̸����� ���о��̵�� ��ȯ
    //��й�ȣ�� ����ϱ� ���ؼ� �ֹι�ȣ �� �ڸ��� ���� �Լ��� �ʿ���

    $query = "insert into student values('$sid','$sname','$grade','$registeted','$did','$ssn','$colid','$cos')";
	$result = mysql_query($query,$connect);

    //��й�ȣ�� �ֹι�ȣ ���ڸ�
    //
    $query = "insert into users values('$sid','$password','$sid')";
	$result = mysql_query($query,$connect);

    //�����̵�
    header("Location: ./registStudent.php");
?>