<?php
    session_start();
?>

<html>
	<script>
		function moveToAcademic(){
			location.href="/regist/regist.php";
		}
		function moveToLecture(){
			location.href="/lecture/lecture.php";
		}
		function moveToLectureCheck(){
			location.href="/course/course.php";
		}
		function moveToGraduat(){
			location.href="/graduat/graduat.php";
		}
		function moveToRecord(){
			location.href='/record/record.php';
		}
		function editLecture(){
			location.href='../editLecture/editLecture.php';
		}
		function addRecord(){
			location.href='../addRecord/addRecord.php';
		}
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
				<div class="naviStyles" onclick = "moveToAcademic()">��������</div>
				<div class="naviStyles" onclick = "moveToLecture()">������û</div>
				<div class="naviStyles" onclick = "moveToLectureCheck()">����Ȯ��</div>
				<div class="naviStyles" onclick = "moveToGraduat()">��������</div>
				<div class="naviStyles" onclick = "moveToRecord()">����Ȯ��</div>
				<br>
				<br>
				<<����>>
				<div class="naviStyles" onclick = "editLecture()">�������</div>
				<div class="naviStyles" onclick = "addRecord()">�������</div>
				<br>
				<br>
				<<����>>
				<div class="naviStyles" onclick = "mangeStudent()">�л�����</div>
				<div class="naviStyles" onclick = "registStudent()">�л����</div>
			</div>
		</div>
</body>
</html>