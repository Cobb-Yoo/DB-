<?
    session_start();
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			������û

		</div>

		<div id = "cont">

			<table>
				<?php
					$user_id = $_SESSION['user_id'];
					$query = "select * from course";
					$result = mysql_query($query, $connect);
					$len = mysql_num_rows($result);

					
					echo "<tr><td>�����̸�</td><td>��米��</td><td>����/����</td><td>����</td><td>����</td><td>��������</td><td>������û</td></tr>";
					for($i=0;$i<$len;$i++){
						echo '<form action="updateLecture.php" method="POST">';
						echo "<tr>";
						$info = mysql_fetch_array($result);

						for($j=1;$j < count($info)/2;$j++){
							
							if($j === 2){
								$query = "select pname from professor, course where course.pid = '$info[$j]' and course.pid = professor.pid";
								$resultOfname = mysql_query($query, $connect);
								$pname = mysql_fetch_array($resultOfname);

								echo "<td>".$pname[0]."</td>";
							}
							else {
								echo "<td>".$info[$j]."</td>";
							}
						}
						echo "<input type='hidden' name='data' value='$info[0]'>";
						echo "<td><input type='submit' value='��������ϱ�'></td>";
						echo "</tr>";
						echo "</form>";
					}
					
				?>
			</table>
		</div>
	</div>
</body>
</html>