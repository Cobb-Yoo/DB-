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
			���е��
		</div>

		<div id = "cont">
            <form action="./editColleage.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='colid' placeholder="�����ڵ��Է�">
                <input type="submit", value="Ȯ��">
            </form>
            <hr>
            <br>
            <?
                $query = "select * from colleage";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo '<table>';
                echo '<tr><td>�����ڵ�</td><td>�����̸�</td></tr>';
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