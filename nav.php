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
				<div class="naviStyles" onclick = "moveToAcademic()">��������</div>
				<div class="naviStyles" onclick = "moveToRegistrationscholarship()">������а���</div>
				<div class="naviStyles" onclick = "moveToLectur()">��������</div>
				<div class="naviStyles" onclick = "moveToGraduat()">��������</div>
				<div class="naviStyles" onclick = "moveToRecord()">��������</div>
				<br>
				<br>
				<div class="naviStyles" onclick = "moveToRecord()">�������</div>
				<div class="naviStyles" onclick = "moveToRecord()">�������</div>
				<br>
				<br>
				<div class="naviStyles" onclick = "moveToRecord()">������а���</div>
			</div>
		</div>
</body>
</html>