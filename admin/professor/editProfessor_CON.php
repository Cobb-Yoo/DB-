<?
    session_start();
    $did = $_POST['did'];
?>

<html>
<head>
    <style>
    </style>
</head>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			�������� 
		</div>

		<div id = "cont">

            <?
                $query = "select * from professor where did='$did'";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo "<form action='insertProfessor.php' method='POST'>";
                    echo "<input type='text' placeholder='�����̸�' name='pname'>";
                    echo "<input type='text' placeholder='�������̵�' name='pid'>";
                    echo "<input type='text' placeholder='������й�ȣ' name='password'>";
                    echo "<input type='hidden' name='did' value='$did'>"; 
                    echo '<td><input type="submit"></td>';
                echo '</form>';

                echo '<hr>';
                echo '<br>';

                echo '<table>';
                echo '<tr><td>�����̸�</td></tr>';
                for($i=0;$i<$len;$i++){
                    echo '<form action="deleteProfessor.php method="POST">';
                        echo "<tr>";
                    
				        $info = mysql_fetch_array($result);
                        echo '<td>'.$info[1].'</td>';
                        echo "<input type='hidden' name='pid' value='$info[0]'>";
                        echo '<td><input type="submit" value="����"></td>';
                        echo "</tr>";
                    echo '</form>';
                }
                echo '</table>';
            ?>
		</div>
	</div>
</body>
</html>