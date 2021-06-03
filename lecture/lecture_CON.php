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

					for($i=0;$i<$len;$i++){
						$info = mysql_fetch_array($result);
						for($j=1;$j < count($info);$j++){
							echo $info[$j]." ";
						}
						echo "<br>";
					}
					
				?>
			</table>
		</div>
	</div>
</body>
</html>