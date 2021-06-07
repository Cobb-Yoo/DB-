<?
    session_start();
	include "../../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			성적확인
		</div>

		<div id = "cont">
			
			<center>
			<table style="border:0px; width:1500px; text-align: center; font-size: 27px;">
				<?php
					$user_id = $_SESSION['user_id'];
					$query = "select course.* from class, course where class.sid = '$user_id' and class.cid = course.cid";
					$result = mysql_query($query, $connect);
					$len = mysql_num_rows($result);

					echo "<tr><td>과목명</td><td>담당교수</td><td>전공/교양</td><td>학점</td><td>요일</td><td>점수</td></tr>";
					for($i=0;$i<$len;$i++){
						echo "<tr>";
						$info = mysql_fetch_array($result);

						$query = "select pname from professor where pid = '$info[2]'";
						$result2 = mysql_query($query, $connect);
						$pname = mysql_fetch_array($result2);

						$query = "select record from class where sid = '$user_id' and cid ='$info[0]'";
						$result2 = mysql_query($query, $connect);
						$score = mysql_fetch_array($result2);

						for($j=1;$j < count($info)/2;$j++){
							if($j == 2) echo '<td bgcolor="#ABC3F5">'.$pname[0]."</td>";
							else if($j == 6) {
								if($score[0] == '') echo '<td bgcolor="#ABC3F5">미입력</td>';
								else echo '<td bgcolor="#ABC3F5">'.$score[0]."</td>";
							}
							else echo '<td bgcolor="#ABC3F5">'.$info[$j]."</td>";
						}
						echo "</tr>";
					}
				?>
			</table>
				</center>
		</div>
	</div>
</body>
</html>