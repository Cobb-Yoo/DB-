<?
    session_start();
    $colid = $_POST['colid'];
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

            <?
                $query = "select * from colleage where colid='$colid'";
				$result = mysql_query($query, $connect);
                $len = mysql_num_rows($result);

                echo "<form action='insertColleage.php' method='POST'>";
                    echo "<input type='text' placeholder='���о��̵�' name='colid'>";
                    echo "<input type='text' placeholder='�����̸�' name='colname'>";
                    echo '<td><input type="submit"></td>';
                echo '</form>';
            ?>
		</div>
	</div>
</body>
</html>