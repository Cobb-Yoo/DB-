<?
    session_start();
	include "../../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			학적관리 
		</div>

		<div id = "cont">
			<center>
			<table style="border:0px; width:1500px; text-align: center; font-size: 27px;">
				<?php
					$user_id = $_SESSION['user_id'];
					$query = "select * from student where sid = '$user_id'";
					$result = mysql_query($query, $connect);
					$info = mysql_fetch_array($result);

					$query = "select colname from colleage where colid = '$info[4]'";
					$result = mysql_query($query, $connect);
					$colname = mysql_fetch_array($result);

					$query = "select dname from dept where did = '$info[6]'";
					$result = mysql_query($query, $connect);
					$dname = mysql_fetch_array($result);

					echo '<tr height="50"><td bgcolor="#ABC3F5">학번</td><td bgcolor="#F0F4E0">'.$info[0].'</td><td bgcolor="#ABC3F5">이름</td><td bgcolor="#F0F4E0">'.$info[1].'</td></tr>';
					echo '<tr height="50"><td bgcolor="#ABC3F5">학년</td><td bgcolor="#F0F4E0">'.$info[2].'</td><td bgcolor="#ABC3F5">재적</td><td bgcolor="#F0F4E0">'.$info[3].'</td></tr>';
					echo '<tr height="50"><td bgcolor="#ABC3F5">대학</td><td bgcolor="#F0F4E0">'.$colname[0].'</td><td bgcolor="#ABC3F5">주민번호</td><td bgcolor="#F0F4E0">'.$info[5].'</td></tr>';
					echo '<tr height="50"><td bgcolor="#ABC3F5">전공</td><td bgcolor="#F0F4E0">'.$dname[0].'</td><td bgcolor="#ABC3F5">구분</td><td bgcolor="#F0F4E0">'.$info[7].'</td></tr>';
					
				?>

			</table>
			</center>
			<form action="../password/password.php" method="POST">
				<input type="submit" value="비밀번호 바꾸기">
			<form>
		</div>
	</div>
</body>
</html>