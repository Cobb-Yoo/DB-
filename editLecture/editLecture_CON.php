<?
    session_start();
	include "../connectDB.php";
?>

<html>
<head>
    <style>
    </style>
</head>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			������� 
		</div>

		<div id = "cont">
            <form action="./add.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='cname' placeholder="�����̸�">
                <input class = "inputLecture", tpye="text" name='state' placeholder="����/����">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="����">
                <input class = "inputLecture", tpye="text" name='days'
                placeholder="��������">
                <input class = "inputLecture", tpye="text" name='how' placeholder="�������">
                <input type="submit" name="login" , value="��������ϱ�">
            </form>
		</div>
	</div>
</body>
</html>