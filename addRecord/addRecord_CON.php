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
            <form action="./checkCourse.php" method="POST">
				<input class = "inputLecture", tpye="text" name="cname" placeholder="�����̸�">
                <input type="submit" value="Ȯ��">
            </form>
		</div>
	</div>
</body>
</html>