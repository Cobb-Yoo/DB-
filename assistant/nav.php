<?php
    session_start();
?>

<html>
	<script>
		function mangeStudent(){
			location.href='../mangeStudent/mangeStudent.php';
		}
		function registStudent(){
			location.href='../registStudent/registStudent.php';
		}
	</script>
<head>
</head>
<body>
    <div class = "navi">
			<div>
				<div class="naviStyles" onclick = "mangeStudent()">�л�����</div>
				<div class="naviStyles" onclick = "registStudent()">�л����</div>
			</div>
		</div>
</body>
</html>