<?php
    session_start();
?>

<html>
	<script>
		function moveToAcademic(){
			location.href="/register/register.php";
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
		function testing(){
			location.href='../141.php';
		}
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
				<div class="naviStyles" onclick = "moveToAcademic()">切利包府</div>
				<div class="naviStyles" onclick = "moveToLectur()">荐诀包府</div>
				<div class="naviStyles" onclick = "moveToGraduat()">凉诀包府</div>
				<div class="naviStyles" onclick = "moveToRecord()">己利包府</div>
				<br>
				<br>
				<div class="naviStyles" onclick = "editLecture()">荐诀殿废</div>
				<div class="naviStyles" onclick = "addRecord()">己利殿废</div>
				<br>
				<br>
			</div>
		</div>
</body>
</html>