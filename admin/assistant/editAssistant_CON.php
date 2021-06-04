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
			조교관리 
		</div>

		<div id = "cont">

            <?
                $query = "select * from assistant where did='$did'";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo "<form action='intsertAssistant.php' method='POST'>";
                    echo "<input type='text' placeholder='조교이름' name='aname'>";
                    echo "<input type='text' placeholder='조교아이디' name='aid'>";
                    echo "<input type='text' placeholder='조교비밀번호' name='password'>";
                    echo "<input type='hidden' name='did' value='$did'>"; 
                    echo '<td><input type="submit"></td>';
                echo '</form>';

                echo '<hr>';
                echo '<br>';

                echo '<table>';
                echo '<tr><td>조교이름</td></tr>';
                for($i=0;$i<$len;$i++){
                    echo '<form action="deleteAssistant.php method="POST">';
                        echo "<tr>";
                    
				        $info = mysql_fetch_array($result);
                        echo '<td>'.$info[1].'</td>';
                        echo "<input type='hidden' name='aid' value='$info[0]'>";
                        echo '<td><input type="submit" value="삭제"></td>';
                        echo "</tr>";
                    echo '</form>';
                }
                echo '</table>';
            ?>
		</div>
	</div>
</body>
</html>