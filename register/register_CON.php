<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			�������� 
		</div>

		<div id = "cont">
			<table>
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
				
					echo '<tr><td>�й�</td><td>'.$info[0].'</td><td>�̸�</td><td>'.$info[1].'</td></tr>';
					echo '<tr>
					<td>�г�</td>
					<td>'.$info[2].'</td>
					<td>�а�</td>
					<td>'.$info[3].'</td>
					</tr>';
					echo '<tr>
					<td>����</td>
					<td>'.$colname[0].'</td>
					<td>�ֹι�ȣ</td>
					<td>'.$info[5].'</td>
					</tr>';
					echo '<tr>
					<td>����</td>
					<td>'.$dname[0].'</td>
					<td>����</td>
					<td>'.$info[7].'</td>
					</tr>';
					
				?>
			</table>
		</div>
	</div>
</body>
</html>