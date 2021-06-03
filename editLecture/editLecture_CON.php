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
			수업등록 
		</div>

		<div id = "cont">
            <form action="./add.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='cname' placeholder="수업이름">
                <input class = "inputLecture", tpye="text" name='state' placeholder="전공/교양">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="학점">
                <input class = "inputLecture", tpye="text" name='days'
                placeholder="수업요일">
                <input class = "inputLecture", tpye="text" name='how' placeholder="수업방식">
                <input type="submit" name="login" , value="수업등록하기">
            </form>
		</div>
	</div>
</body>
</html>