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
			성적등록 
		</div>

		<div id = "cont">
            <form action="./checkCourse.php" method="POST">
				<input class = "inputLecture", tpye="text" name="cname" placeholder="수업이름">
                <input type="submit" value="확인">
            </form>
		</div>
	</div>
</body>
</html>