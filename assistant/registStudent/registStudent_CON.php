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
			�л���� 
		</div>

		<div id = "cont">
            <form action="./insertStudent.php" method="POST">
			    <input class = "inputLecture", tpye="text" name='sid' placeholder="�й�">
                <input class = "inputLecture", tpye="text" name='sname' placeholder="�̸�">
                <input class = "inputLecture", tpye="text" name='grade' placeholder="�г�">
                <input class = "inputLecture", tpye="text" name='registeted' placeholder="����">
                <input class = "inputLecture", tpye="text" name='did' placeholder="�����ڵ�">
                <input class = "inputLecture", tpye="text" name='ssn' placeholder="�ֹι�ȣ">
                <input class = "inputLecture", tpye="text" name='colid' placeholder="�����ڵ�">
                <input class = "inputLecture", tpye="text" name='cos' placeholder="����">
                <input type="submit" name="login" , value="���">
            </form>

            <?
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

            <hr>

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