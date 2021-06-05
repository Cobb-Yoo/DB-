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
			학생등록 
		</div>

		<div id = "cont">
            <form action="./insertStudent.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='sid' placeholder="학번">
                <input class = "inputLecture", tpye="text" name='sname' placeholder="이름">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="학년">
                <input class = "inputLecture", tpye="text" name='registeted' placeholder="재적">
                <input class = "inputLecture", tpye="text" name='did' placeholder="전공코드">
                <input class = "inputLecture", tpye="text" name='ssn' placeholder="주민번호">
                <input class = "inputLecture", tpye="text" name='colid' placeholder="대학코드">
                <input class = "inputLecture", tpye="text" name='cos' placeholder="구분">
                <input type="submit" name="login" , value="등록">
            </form>

            <?
                $query = "select * from dept";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo '<table>';
                echo '<tr><td>학과코드</td><td>학과이름</td></tr>';
                for($i=0;$i<$len;$i++){
                    echo "<tr>";
                    
				    $info = mysql_fetch_array($result);
                    for($j=0;$j<count($info)/2;$j++){
                        echo '<td>'.$info[$j].'</td>';
                    }
                    echo "</tr>";
                }
                echo '</table>';
            ?>

            <hr>

            <?
                $query = "select * from colleage";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo '<table>';
                echo '<tr><td>대학코드</td><td>대학이름</td></tr>';
                for($i=0;$i<$len;$i++){
                    echo "<tr>";
                    
				    $info = mysql_fetch_array($result);
                    for($j=0;$j<count($info)/2;$j++){
                        echo '<td>'.$info[$j].'</td>';
                    }
                    echo "</tr>";
                }
                echo '</table>';
            ?>
		</div>
	</div>
</body>
</html>