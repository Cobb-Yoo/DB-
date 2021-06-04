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
                <div class="naviStyles" onclick = "manageProfessor()">措切包府</div>
                <div class="naviStyles" onclick = "manageProfessor()">切苞包府</div>
				<div class="naviStyles" onclick = "manageProfessor()">背荐包府</div>
				<div class="naviStyles" onclick = "manageAssistant()">炼背包府</div>
			</div>
		</div>
</body>
</html>