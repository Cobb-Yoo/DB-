<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			�л����� 
		</div>

		<div id = "cont">

			<table>
				<?php
					$user_id = $_SESSION['user_id'];
					$query = "select student.* from student where student.did = (select did from student where student.sid = '$user_id')";
					$result = mysql_query($query, $connect);
					$len = mysql_num_rows($result);

					echo "<tr><td>�й�</td><td>�̸�</td><td>�г�</td><td>����</td><td>?</td><td>�ֹι�ȣ</td><td>?</td><td>����</td></tr>";
					for($i=0;$i<$len;$i++){
						echo "<tr>";
						echo '<form action="../editStudent/editStudent.php" method="POST">';
						$info = mysql_fetch_array($result);
						for($j=0;$j < count($info)/2;$j++){
							echo "<td>".$info[$j]."</td>";
						}
						echo "<input type='hidden' name='data' value='$info[0]'>";
						echo "<td><input type='submit' value='�����ϱ�'></td>";
						echo "</form>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</div>
</body>
</html>