<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			��й�ȣ �����ϱ�
		</div>

		<div id = "cont">
			<form action="./changePassword.php" method="POST">
                <input type="text" name="prePass" placeholder="���� ��й�ȣ">
                <input type="text" name="checktPass" placeholder="���ο� ��й�ȣ">
                <input type="text" name="postPass" placeholder="�ѹ� ��">
				<input type="submit" value="��й�ȣ �ٲٱ�">
			<form>
		</div>
	</div>
</body>
</html>