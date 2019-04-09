<!DOCTYPE html>
<html>
<head>
	<title>教务管理系统</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css">
	<style>
	   body{
	   	background-color: black;
	   	font-size: 20px;
	   }
	</style>
</head>
<body>
<header >
     <ul>
        <li><a href="main.php" target="main">教学管理中心</a></li>
        <li><a href="index.php" onclick="copyText()" target="main">查看信息</a></li>
        <li><a href="teacherdoc.php" target="main"><button class="button1">教师资料录入和删除</button></a></li>
        <li><a href="studentdoc.php" target="main"><button class="button1">学生信息录入与删除</button></a></li>
        <li><a href="record.php" target="main"><button class="button1">成绩录入与删除</button></a></li>
        <li><a href="updatedoc.php" target="main"><button class="button1">信息修改</button></a></li>
        <div id = "disp" >
     <?php
       session_start();   
        if(isset($_SESSION['name']))
        {
          echo "你好！".$_SESSION['name'];
          echo "   ";
            echo "<a href='center_back.php'>退出登录</a>";
             //   session_destroy();
        }
        else
           {
            echo "<a onclick='Lr()'>注册</a>";
            echo "   ";
            echo "<a onclick='Lr()'>登录</a>";
               session_destroy();
           } 
        ?>
     </div>

     </ul>
   </header>

   <script>
function copyText()
{
alert("请点击确定后稍等片刻");
}
function Lr(){
window.parent.location.href="login_reg.php";  //退出并在原页面显示新窗口
}
</script>
</body>
</html>