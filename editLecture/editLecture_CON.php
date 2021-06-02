<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			수업등록 
		</div>

		<div id = "cont">
            <form action="../editLecture/editLecture.php" method="POST">
			    <input tpye="text" name='' placeholder="수업이름">
                <input tpye="text" name='' placeholder="담당교수 코드">
                <input tpye="text" name='' placeholder="전공/교양">
                <input tpye="text" name='' placeholder="학점">
                <input tpye="text" name='' placeholder="수업 요일">
                <input tpye="text" name='' placeholder="수업방식">
                <input type="submit" name="login" , value="로그인">
            </form>
		</div>
	</div>
</body>
</html>