<?php
    session_start();
?>

<html>
	<script>
		function moveToAcademic(){
			location.href="../regist/regist.php";
		}
		function moveToLecture(){
			location.href="../lecture/lecture.php";
		}
		function moveToLectureCheck(){
			location.href="../course/course.php";
		}
		function moveToRecord(){
			location.href='../record/record.php';
		}
	</script>
<head>
</head>
<body>
    <div class = "navi">
			<div>
				<div class="naviStyles" onclick = "moveToAcademic()">��������</div>
				<div class="naviStyles" onclick = "moveToLecture()">������û</div>
				<div class="naviStyles" onclick = "moveToLectureCheck()">����Ȯ��</div>
				<div class="naviStyles" onclick = "moveToRecord()">����Ȯ��</div>
			</div>
		</div>
</body>
</html>