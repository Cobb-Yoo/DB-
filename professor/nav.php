<?php
    session_start();
?>

<html>
	<script>
		function editLecture(){
			location.href='../editLecture/editLecture.php';
		}
		function addRecord(){
			location.href='../addRecord/addRecord.php';
		}
	</script>
<head>
</head>
<body>
    <div class = "navi">
			<div>
				<div class="naviStyles" onclick = "editLecture()">�������</div>
				<div class="naviStyles" onclick = "addRecord()">�������</div>
			</div>
		</div>
</body>
</html>