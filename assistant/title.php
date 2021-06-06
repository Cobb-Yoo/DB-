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
            $query = "select aname from assistant where assistant.aid = '$user_id'";
		    $result = mysql_query($query, $connect);
            $info = mysql_fetch_array($result);

            echo $info[0]."(".$user_id.")"
        
        ?> | 
        
        <a href='/login.html' style="text-decoration='none'"> 로그아웃 </a>
    </div>
    <div id = "title">강릉원주대학교 학사관리 시스템 - 조교</div>
</body>
</html>