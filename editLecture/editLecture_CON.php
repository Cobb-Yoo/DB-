<?
    session_start();
	include "../connectDB.php";
?>

<html>
<body>
	<div class = "conts_div">
		<div id = "cont_title"> 
			������� 
		</div>

		<div id = "cont">
            <form action="../editLecture/editLecture.php" method="POST">
			    <input tpye="text" name='' placeholder="�����̸�">
                <input tpye="text" name='' placeholder="��米�� �ڵ�">
                <input tpye="text" name='' placeholder="����/����">
                <input tpye="text" name='' placeholder="����">
                <input tpye="text" name='' placeholder="���� ����">
                <input tpye="text" name='' placeholder="�������">
                <input type="submit" name="login" , value="�α���">
            </form>
		</div>
	</div>
</body>
</html>