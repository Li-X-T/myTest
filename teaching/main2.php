<!DOCTYPE html>
<html>
<head>
	<title>化脓猪院</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <center>
        <p>您当前为学生身份，只为您提供查询功能</p>
        <p>当前学生数:
        <?php
        $con = mysql_connect("localhost", "root", "root");
        if (!$con)
        {
           die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db("teaching",$con);
        $sql = "SELECT * FROM student";
        $result = mysql_query($sql,$con);
        echo mysql_num_rows($result);
        mysql_close($con);
        ?></p>
        <p>当前老师数:
         <?php
        $con = mysql_connect("localhost", "root", "root");
        if (!$con)
        {
           die('Could not connect: ' . mysql_error());
        }
        $db_selected = mysql_select_db("teaching",$con);
        $sql = "SELECT * FROM teacher";
        $result = mysql_query($sql,$con);
        echo mysql_num_rows($result);
        mysql_close($con);
        ?></p>       
        <h1><a href="javascript:window.parent.location.href='login_reg.php';">退出系统</a></h1>
        </center>
<marquee behavior=alternate><font size=+3 color=red>欢迎使用教学系统</font></marquee>


   <footer>
    版权归珠江学院所有
   </footer>
</body>
</html>