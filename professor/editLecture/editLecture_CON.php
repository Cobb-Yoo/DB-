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
            <form action="./insertLecture.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='cname' placeholder="�����̸�">
                <input class = "inputLecture", tpye="text" name='state' placeholder="����/����">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="����">
                <input class = "inputLecture", tpye="text" name='days'
                placeholder="��������">
                <input class = "inputLecture", tpye="text" name='how' placeholder="�������">
                <input type="submit" name="login" , value="��������ϱ�">
            </form>

            <hr><br>

            <div>
                <center>
                <table style="border:0px; width:500px; text-align: center; font-size: 27px;">
                <tr><td>�����̸�</td><td>��������</td></tr>
                <?
                    $pid = $_SESSION['user_id'];
				    $query = "select course.* from course where course.pid = '$user_id'";
				    $result = mysql_query($query, $connect);
				    $len = mysql_num_rows($result);
		    		for($i=0;$i<$len;$i++){
			    		$info = mysql_fetch_array($result);
				    	echo "<tr>";

					    for($j=1;$j<count($info)/2;$j++){
						    if($j == 1) echo '<td  bgcolor="#ABC3F5">'.$info[$j].'</td>';
                            else if($j == 5) echo '<td  bgcolor="#F0F4E0">'.$info[$j].'</td>';
					    }
					    echo "</tr>";
				    }
                ?>
                </table>
                </center>
            </div>
		</div>

        
	</div>
</body>
</html>