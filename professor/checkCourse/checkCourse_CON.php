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
			������� -
			<?
				echo $cname;
			?>
		</div>

		<div id = "cont">
			
			<?
				$len = mysql_num_rows($result);

				echo "<table>";
				echo "<tr><td>�й�</td><td>�̸�</td><td>����</td><td>�б�</td></tr>";
				for($i=0;$i<$len;$i++){
					echo "<tr>";
					echo '<form action="./insertRecord.php" method="POST">';
					$info = mysql_fetch_array($result);

					$query = "select sname from student where sid = '$info[0]'";
					$result2 = mysql_query($query, $connect);
					$sname = mysql_fetch_array($result2);

					for($j=0;$j < count($info)/2;$j++){
						if($j != 1) echo "<td>".$info[$j]."</td>";
						else echo "<td>".$sname[0]."</td>";
					}
					echo "<input type='hidden' name='sid' value = '$info[0]'>";
					echo "<input type='hidden' name='cid' value = '$cid'>";
					echo "<td><input type='text' name='record' placeholder='����'></td>";
					echo "<td><input type='text' name='yterm' placeholder='�б�'></td>";
					echo "<td><input type='submit' value='�����ϱ�'></td>";
					echo "</form>";
					echo "</tr>";
				}
				echo "</table>";
			?>
		</div>
	</div>
</body>
</html>