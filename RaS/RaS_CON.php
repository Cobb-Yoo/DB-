<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			������а��� 
		</div>

		<div id = "cont">
			<img src="apple.jpg" class = "cont_item">

			<table>
				<?php
					$tmp = $_SESSION['user_id'];
					$query = "select * from student where sid = '$tmp'";
					$result = mysql_query($query, $connect);
					$info=mysql_fetch_array($result);
				
					echo '<tr><td>�й�</td><td>'.$info[0].'</td><td>�̸�</td><td>'.$info[1].'</td></tr>';
					echo '<tr>
					<td>�г�</td>
					<td>'.$info[2].'</td>
					<td>�а�</td>
					<td>'.$info[3].'</td>
					</tr>';
					echo '<tr>
					<td>����</td>
					<td>'.$info[4].'</td>
					<td>�ֹι�ȣ</td>
					<td>'.$info[5].'</td>
					</tr>';
					echo '<tr>
					<td>����</td>
					<td>'.$info[6].'</td>
					<td>����</td>
					<td>'.$info[7].'</td>
					</tr>';
					
				?>
			</table>
		</div>
	</div>
</body>
</html>