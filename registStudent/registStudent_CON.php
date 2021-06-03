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
			학생등록 
		</div>

		<div id = "cont">
            <form action="./insertStudent.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='sid' placeholder="학번">
                <input class = "inputLecture", tpye="text" name='sname' placeholder="이름">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="학년">
                <input class = "inputLecture", tpye="text" name='registeted' placeholder="재적">
                <input class = "inputLecture", tpye="text" name='did' placeholder="전공">
                <input class = "inputLecture", tpye="text" name='ssn' placeholder="주민번호">
                <input class = "inputLecture", tpye="text" name='colid' placeholder="대학">
                <input class = "inputLecture", tpye="text" name='cos' placeholder="구분">
                <input type="submit" name="login" , value="등록">
            </form>
		</div>
	</div>
</body>
</html>