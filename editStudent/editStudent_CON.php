<?
    session_start();
	include "../connectDB.php";
?>

<html>
<head>
    <style>
    </style>
</head>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			학생수정
		</div>

		<div id = "cont">
				<?php
					$user_id = $_SESSION['user_id'];
					$query = "select * from student where sid = $sid";
					$result = mysql_query($query, $connect);

						echo '<form action="insertData.php" method="POST">';
						$info = mysql_fetch_array($result);


						echo "<input type='text' value='$info[0]' name = 'sid'>";
                        echo "<input type='text' value='$info[1]' name = 'sname'>";
                        echo "<input type='text' value='$info[2]' name = 'grande'>";
                        echo "<input type='text' value='$info[3]' name = 'registetd'>";
                        echo "<input type='text' value='$info[4]' name = 'did'>";
                        echo "<input type='text' value='$info[5]' name = 'ssn'>";
                        echo "<input type='text' value='$info[6]' name = 'colid'>";
                        echo "<input type='text' value='$info[7]' name = 'cos'>";
                        
						echo "<input type='submit' value='수정하기'>";
						echo "</form>";
				
					
				?>
			</table>
		</div>
	</div>
</body>
</html>