<?php
    session_start();
?>

<html>
	<script>
		function moveToAcademic(){
			location.href="/register/register.php";
		}
		function moveToRegistrationscholarship(){
			location.href="/RaS/ras.php"; // Registration and scholarship;
		}
		function moveToLectur(){
			location.href="/lecture/lecture.php";
		}
		function moveToGraduat(){
			location.href="/graduat/graduat.php";
		}
		function moveToRecord(){
			location.href='/record/record.php';
		}
	</script>
<head>
</head>
<body>
    <div class = "navi">
			<div>
				<div class="naviStyles" onclick = "moveToAcademic()">切利包府</div>
				<div class="naviStyles" onclick = "moveToRegistrationscholarship()">殿废厘切包府</div>
				<div class="naviStyles" onclick = "moveToLectur()">荐诀包府</div>
				<div class="naviStyles" onclick = "moveToGraduat()">凉诀包府</div>
				<div class="naviStyles" onclick = "moveToRecord()">己利包府</div>
				<br>
				<br>
				<div class="naviStyles" onclick = "moveToRecord()">荐诀殿废</div>
				<div class="naviStyles" onclick = "moveToRecord()">己利殿废</div>
				<br>
				<br>
				<div class="naviStyles" onclick = "moveToRecord()">殿废厘切包府</div>
			</div>
		</div>
</body>
</html>