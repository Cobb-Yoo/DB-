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
            $query = "select sname from users, student where users.sid = '$user_id' and users.sid = student.sid";
		    $result = mysql_query($query, $connect);
            $info = mysql_fetch_array($result);

            echo $info[0]."(".$user_id.")"
        
        ?> | 
        
        <a href='/login.html' style="text-decoration='none'"> �α׾ƿ� </a>
    </div>
    <div id = "title">�������ִ��б� �л���� �ý��� - �л�</div>
</body>
</html>