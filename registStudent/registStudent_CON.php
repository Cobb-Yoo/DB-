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
			�л���� 
		</div>

		<div id = "cont">
            <form action="./insertStudent.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='sid' placeholder="�й�">
                <input class = "inputLecture", tpye="text" name='sname' placeholder="�̸�">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="�г�">
                <input class = "inputLecture", tpye="text" name='registeted' placeholder="����">
                <input class = "inputLecture", tpye="text" name='did' placeholder="����">
                <input class = "inputLecture", tpye="text" name='ssn' placeholder="�ֹι�ȣ">
                <input class = "inputLecture", tpye="text" name='colid' placeholder="����">
                <input class = "inputLecture", tpye="text" name='cos' placeholder="����">
                <input type="submit" name="login" , value="���">
            </form>
		</div>
	</div>
</body>
</html>