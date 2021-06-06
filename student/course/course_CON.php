<?
    session_start();
	//include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			수업확인
		</div>

		<div id = "cont">

			<table>
				<?php
					$user_id = $_SESSION['user_id'];
					$query = "select course.* from class, course where class.sid = '$user_id' and class.cid = course.cid";
					$result = mysql_query($query, $connect);
					$len = mysql_num_rows($result);

					echo "<table>";
					echo "<tr><td>과목명</td><td>담당교수</td><td>전공/교양</td><td>학점</td><td>요일</td><td>방법</td></tr>";
					for($i=0;$i<$len;$i++){
						echo '<form action="deleteCourse.php" method="POST">';
						echo "<tr>";
						$info = mysql_fetch_array($result);

						$query = "select pname from professor where pid = '$info[2]'";
						$result2 = mysql_query($query, $connect);
						$pname = mysql_fetch_array($result2);

						for($j=1;$j < count($info)/2;$j++){
							if($j == 2) echo "<td>".$pname[0]."</td>";
							else echo "<td>".$info[$j]."</td>";
						}
						echo "<input type='hidden' name=data value='$info[0]'>";
						echo "<td><input type='submit' value='수강취소'></td>";
						echo "</tr>";
						echo '</form>';
					}
					echo "</table>";
					
				?>
			</table>
		</div>
	</div>
</body>
</html>