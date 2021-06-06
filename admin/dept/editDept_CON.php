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
			학과등록 
		</div>

		<div id = "cont">

            <?
                $query = "select * from professor where did='$did'";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo "<form action='insertDept.php' method='POST'>";
                    echo "<input type='text' placeholder='학과아이디' name='did'>";
                    echo "<input type='text' placeholder='학과이름' name='dname'>";
                    echo '<td><input type="submit"></td>';
                echo '</form>';
            ?>
		</div>
	</div>
</body>
</html>