<?
    session_start();
?>

<html>
<head>
    <style>
    </style>
</head>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			������� 
		</div>

		<div id = "cont">
			<table style="border:0px; width:1000px; text-align: center; font-size: 27px;">
			<?
				$pid = $_SESSION['user_id'];
				$query = "select course.* from course where course.pid = '$user_id'";
				$result = mysql_query($query, $connect);
				$len = mysql_num_rows($result);
				
				echo "<tr><td>�����</td><td>����/����</td><td>����</td><td>����</td><td>���</td></tr>";
				for($i=0;$i<$len;$i++){
					$info = mysql_fetch_array($result);
					echo "<tr>";
					echo '<form action="../checkCourse/checkCourse.php" method="POST">';

					for($j=1;$j<count($info)/2;$j++){
						if($j != 2)echo '<td>'.$info[$j].'</td>';
					}

					echo "<input type='hidden' name='cid' value='$info[0]'>";
					echo "<input type='hidden' name='cname' value='$info[1]'>";
					echo "<td><input type='submit' value='�Է��ϱ�'></td>";
					echo '</form>';
					echo "</tr>";
				}
			?>
			</table>
		</div>
	</div>
</body>
</html>