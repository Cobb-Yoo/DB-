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
			<?
				$pid = $_SESSION['user_id'];
				$query = "select course.* from class, course where class.sid = '$user_id' and class.cid = course.cid";
				$result = mysql_query($query, $connect);
				$len = mysql_num_rows($result);
			?>
            <form action="./checkCourse.php" method="POST">
				<input class = "inputLecture", tpye="text" name="cname" placeholder="�����̸�">
                <input type="submit" value="Ȯ��">
            </form>
		</div>
	</div>
</body>
</html>