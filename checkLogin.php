<?
	session_start();
	include "connectDB.php";
	
	$php_id = $_POST['html_id'];
	$php_password = $_POST['html_password'];
	$checkedRadio = $_POST['radioCheck'];


	if($php_id === 'admin' && $php_password === 'helloworld!'){
		Header ("Location: ./admin/colleage/manageColleage.php");
	}
	else if($checkedRadio == 'student'){
		$query = "select * from users where id = '$php_id' and password = '$php_password'";

		$result = mysql_query($query, $connect);
		$cnt = mysql_num_rows($result);
	
		$info=mysql_fetch_array($result);
		if($cnt == 1 && $php_id === $info[0] && $php_password === $info[1]){
			$_SESSION['user_id'] = $info[2];

			Header ("Location: ./student/regist/regist.php");
		}
		else{
			echo '<script>alert("아이디와 비밀번호를 정확하게 입력해주세요")</script>';
			echo '<script>window.location = "login.html"</script>';
		}
	}
	else if($checkedRadio == 'assistant'){
		$query = "select users.* from assistant, users where aid = '$php_id' and id = '$php_id' and password = '$php_password'";

		$result = mysql_query($query, $connect);
		$cnt = mysql_num_rows($result);
	
		$info=mysql_fetch_array($result);
		if($cnt == 1 && $php_id === $info[0] && $php_password === $info[1]){ 
			$_SESSION['user_id'] = $info[2];

			Header ("Location: ./assistant/mangeStudent/mangeStudent.php");
		}
	}
	else if($checkedRadio == 'professor'){
		$query = "select users.* from professor, users where pid = '$php_id' and id = '$php_id' and password = '$php_password'";

		$result = mysql_query($query, $connect);
		$cnt = mysql_num_rows($result);
	
		$info=mysql_fetch_array($result);
		if($cnt == 1 && $php_id === $info[0] && $php_password === $info[1]){ 
			$_SESSION['user_id'] = $info[2];

			Header ("Location: ./professor/editLecture/editLecture.php");
		}
	}
	
	echo '<script>alert("아이디와 비밀번호를 정확하게 입력해주세요")</script>';
	echo '<script>window.location = "login.html"</script>';
    
?>