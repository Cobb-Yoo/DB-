<?
    session_start();
    include "../../connectDB.php";
?>

<html>
<head>
    <style>
        a:link { color: black; text-decoration: none;}
        a:visited { color: black; text-decoration: none;}
    </style>
</head>
<body>
    <div id = "login">
       <?
            $user_id = $_SESSION['user_id'];
            $query = "select pname from users, professor where pid = '$user_id' and users.sid = professor.pid";
		    $result = mysql_query($query, $connect);
            $info = mysql_fetch_array($result);

            echo $info[0]."(".$user_id.")"
        
        ?> | 
        
        <a href='/login.html' style="text-decoration='none'"> �α׾ƿ� </a>
    </div>
    <div id = "title">�������ִ��б� �л���� �ý��� - ����</div>
</body>
</html>