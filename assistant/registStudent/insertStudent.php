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
    //학과, 대학, 주민번호에 대한 추가적인 연산이 필용함
    //학과이름에서 학과아이디로 변환
    //대학이름에서 대학아이디로 변환
    //비밀번호로 사용하기 위해서 주민번호 앞 자리만 얻어내는 함수가 필요함

    $query = "insert into student values('$sid','$sname','$grade','$registeted','$did','$ssn','$colid','$cos')";
	$result = mysql_query($query,$connect);

    //비밀번호는 주민번호 앞자리
    //
    $query = "insert into users values('$sid','$password','$sid')";
	$result = mysql_query($query,$connect);

    //강제이동
    header("Location: ./registStudent.php");
?>