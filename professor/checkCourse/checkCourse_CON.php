<?
    session_start();

	$pid = $_session['user_id'];
	$cid = $_POST['cid'];
	$cname = $_POST['cname'];

	$query = "select * from class where cid = '$cid'";
	$result = mysql_query($query, $connect);
?>

<html>
<head>
    <style>
    </style>
</head>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			성적등록 -
			<?
				echo $cname;
			?>
		</div>

		<div id = "cont">
			
			<table style="border:0px; width: 1000px; text-align: center; font-size: 27px;">
			<?
				$len = mysql_num_rows($result);

				echo "<tr><td>학번</td><td>이름</td><td>점수</td><td>학기</td></tr>";
				for($i=0;$i<$len;$i++){
					echo "<tr>";
					echo '<form action="./insertRecord.php" method="POST">';
					$info = mysql_fetch_array($result);

					$query = "select sname from student where sid = '$info[0]'";
					$result2 = mysql_query($query, $connect);
					$sname = mysql_fetch_array($result2);

					for($j=0;$j < count($info)/2;$j++){
						if($j == 1) echo "<td>".$sname[0]."</td>";
						else if($j == 2 || $j == 3){
							if($info[$j] == '') echo "<td bgcolor='#F5B0AB'>미입력</td>";
							else echo "<td bgcolor='#ABC3F5'>".$sname[0]."</td>";
						}
						else echo "<td bgcolor='#ABC3F5'>".$info[$j]."</td>";
					}
					echo "<input type='hidden' name='sid' value = '$info[0]'>";
					echo "<input type='hidden' name='cid' value = '$cid'>";
					echo "<td><input type='text' name='record' placeholder='점수'></td>";
					echo "<td><input type='text' name='yterm' placeholder='학기'></td>";
					echo "<td><input type='submit' value='변경하기'></td>";
					echo "</form>";
					echo "</tr>";
				}
			?>
			</table>;
		</div>
	</div>
</body>
</html>