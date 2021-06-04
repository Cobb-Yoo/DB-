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
				<div class="naviStyles" onclick = "moveToAcademic()">학적관리</div>
				<div class="naviStyles" onclick = "moveToLecture()">수강신청</div>
				<div class="naviStyles" onclick = "moveToLectureCheck()">수업확인</div>
				<div class="naviStyles" onclick = "moveToRecord()">성적확인</div>
			</div>
		</div>
</body>
</html>