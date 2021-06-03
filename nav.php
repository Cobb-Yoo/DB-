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
		function editLecture(){
			location.href='../editLecture/editLecture.php';
		}
		function addRecord(){
			location.href='../addRecord/addRecord.php';
		}
		function mangeStudent(){
			location.href='../mangeStudent/mangeStudent.php';
		}
	</script>
<head>
</head>
<body>
    <div class = "navi">
			<div>
				<div class="naviStyles" onclick = "moveToAcademic()">학적관리</div>
				<div class="naviStyles" onclick = "moveToLectur()">수강신청</div>
				<div class="naviStyles" onclick = "moveToLectur()">수업확인</div>
				<div class="naviStyles" onclick = "moveToGraduat()">졸업관리</div>
				<div class="naviStyles" onclick = "moveToRecord()">성적확인</div>
				<br>
				<br>
				<<교수>>
				<div class="naviStyles" onclick = "editLecture()">수업등록</div>
				<div class="naviStyles" onclick = "addRecord()">성적등록</div>
				<br>
				<br>
				<<조교>>
				<div class="naviStyles" onclick = "mangeStudent()">학생관리</div>
			</div>
		</div>
</body>
</html>