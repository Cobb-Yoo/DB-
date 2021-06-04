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
				<div class="naviStyles" onclick = "mangeStudent()">切积包府</div>
				<div class="naviStyles" onclick = "registStudent()">切积殿废</div>
			</div>
		</div>
</body>
</html>