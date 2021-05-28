<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			등록장학관리 
		</div>

		<div id = "cont">
			<img src="apple.jpg" class = "cont_item">

			<table>
				<?php
					$tmp = $_SESSION['user_id'];
					$query = "select * from student where sid = '$tmp'";
					$result = mysql_query($query, $connect);
					$info=mysql_fetch_array($result);
				
					echo '<tr><td>학번</td><td>'.$info[0].'</td><td>이름</td><td>'.$info[1].'</td></tr>';
					echo '<tr>
					<td>학년</td>
					<td>'.$info[2].'</td>
					<td>학과</td>
					<td>'.$info[3].'</td>
					</tr>';
					echo '<tr>
					<td>대학</td>
					<td>'.$info[4].'</td>
					<td>주민번호</td>
					<td>'.$info[5].'</td>
					</tr>';
					echo '<tr>
					<td>전공</td>
					<td>'.$info[6].'</td>
					<td>구분</td>
					<td>'.$info[7].'</td>
					</tr>';
					
				?>
			</table>
		</div>
	</div>
</body>
</html>