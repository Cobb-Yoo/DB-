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
			�а�����
		</div>

		<div id = "cont">
            <?
            echo "<form action='insertDept.php' method='POST'>";
                    echo "<input type='text' placeholder='�а����̵�' name='did'>";
                    echo "<input type='text' placeholder='�а��̸�' name='dname'>";
                    echo '<td><input type="submit"></td>';
                echo '</form>';
            echo "<hr>";
            echo "<br>";
                $query = "select * from dept";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo '<table>';
                echo '<tr><td>�а��ڵ�</td><td>�а��̸�</td></tr>';
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