<?
    session_start();
	include "../../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			�������� 
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

					echo '<tr height="50"><td bgcolor="#ABC3F5">�й�</td><td bgcolor="#F0F4E0">'.$info[0].'</td><td bgcolor="#ABC3F5">�̸�</td><td bgcolor="#F0F4E0">'.$info[1].'</td></tr>';
					echo '<tr height="50"><td bgcolor="#ABC3F5">�г�</td><td bgcolor="#F0F4E0">'.$info[2].'</td><td bgcolor="#ABC3F5">����</td><td bgcolor="#F0F4E0">'.$info[3].'</td></tr>';
					echo '<tr height="50"><td bgcolor="#ABC3F5">����</td><td bgcolor="#F0F4E0">'.$colname[0].'</td><td bgcolor="#ABC3F5">�ֹι�ȣ</td><td bgcolor="#F0F4E0">'.$info[5].'</td></tr>';
					echo '<tr height="50"><td bgcolor="#ABC3F5">����</td><td bgcolor="#F0F4E0">'.$dname[0].'</td><td bgcolor="#ABC3F5">����</td><td bgcolor="#F0F4E0">'.$info[7].'</td></tr>';
					
				?>

			</table>
			</center>
			<form action="../password/password.php" method="POST">
				<input type="submit" value="��й�ȣ �ٲٱ�">
			<form>
		</div>
	</div>
</body>
</html>