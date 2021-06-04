<?
    session_start();
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			학생관리 
		</div>

		<div id = "cont">

			<table>
				<?php
					$user_id = $_SESSION['user_id'];
					$query = "select student.* from student where student.did = (select did from assistant where aid = '$user_id')";
					$result = mysql_query($query, $connect);
					$len = mysql_num_rows($result);

					echo "<tr><td>학번</td><td>이름</td><td>학년</td><td>재적</td><td>학과</td><td>주민번호</td><td>대학</td><td>구분</td></tr>";
					for($i=0;$i<$len;$i++){
						echo "<tr>";
						echo '<form action="../editStudent/editStudent.php" method="POST">';
						$info = mysql_fetch_array($result);

						$query = "select dname from dept where did = '$info[4]'";
						$result2 = mysql_query($query, $connect);
						$dname = mysql_fetch_array($result2);

						$query = "select colname from colleage where colid = '$info[6]'";
						$result3 = mysql_query($query, $connect);
						$colname = mysql_fetch_array($result3);

						for($j=0;$j < count($info)/2;$j++){
							if($j == 4) echo "<td>".$dname[0]."</td>";
							else if($j == 6) echo "<td>".$colname[0]."</td>";
							else echo "<td>".$info[$j]."</td>";
						}
						echo "<input type='hidden' name='data' value='$info[0]'>";
						echo "<input type='hidden' name='nameData' value='$info[1]'>";
						echo "<td><input type='submit' value='수정하기'></td>";
						echo "</form>";
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</div>
</body>
</html>