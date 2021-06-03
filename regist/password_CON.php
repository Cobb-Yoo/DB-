<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			비밀번호 변경하기
		</div>

		<div id = "cont">
			<form action="./changePassword.php" method="POST">
                <input type="text" name="prePass" placeholder="지금 비밀번호">
                <input type="text" name="checktPass" placeholder="새로운 비밀번호">
                <input type="text" name="postPass" placeholder="한번 더">
				<input type="submit" value="비밀번호 바꾸기">
			<form>
		</div>
	</div>
</body>
</html>