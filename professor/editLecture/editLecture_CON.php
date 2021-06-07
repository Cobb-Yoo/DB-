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
			수업등록 
		</div>

		<div id = "cont">
            <form action="./insertLecture.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='cname' placeholder="수업이름">
                <input class = "inputLecture", tpye="text" name='state' placeholder="전공/교양">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="학점">
                <input class = "inputLecture", tpye="text" name='days'
                placeholder="수업요일">
                <input class = "inputLecture", tpye="text" name='how' placeholder="수업방식">
                <input type="submit" name="login" , value="수업등록하기">
            </form>

            <hr><br>

            <div>
                <center>
                <table style="border:0px; width:500px; text-align: center; font-size: 27px;">
                <tr><td>수업이름</td><td>수업요일</td></tr>
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