<?php
    session_start();
?>

<html>
	<script>
		function manageAssistant(){
			location.href='../../admin/assistant/manageAssistant.php';
		}
		function manageProfessor(){
			location.href='../../admin/professor/manageProfessor.php';
		}
	</script>
<head>
</head>
<body>
    <div class = "navi">
			<div>
                <div class="naviStyles" onclick = "manageProfessor()">���а���</div>
                <div class="naviStyles" onclick = "manageProfessor()">�а�����</div>
				<div class="naviStyles" onclick = "manageProfessor()">��������</div>
				<div class="naviStyles" onclick = "manageAssistant()">��������</div>
			</div>
		</div>
</body>
</html>