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
            <?
                echo "<div>";
                    echo "<form action='insertColleage.php' method='POST'>";
                        echo "<input type='text' placeholder='대학아이디' name='colid'>";
                        echo "<input type='text' placeholder='대학이름' name='colname'>";
                        echo '<td><input type="submit"></td>';
                    echo '</form>';
                echo "</div>";

                echo "<hr>";
                echo "<br>";

                echo "<div>";
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
                echo "</div>";
            ?>
		</div>
	</div>
</body>
</html>