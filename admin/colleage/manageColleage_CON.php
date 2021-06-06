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
			대학등록
		</div>

		<div id = "cont">
            <form action="./editColleage.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='colid' placeholder="대학코드입력">
                <input type="submit", value="확인">
            </form>
            <hr>
            <br>
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