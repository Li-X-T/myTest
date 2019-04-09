<!DOCTYPE html>
<html>
<head>
	<title>用户登录与注册</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css" /> 
</head>
<body>
   <header>
   <center><h style = "font-size: 40px">花猪系统</h></center>
   </header>
        <center>
        <div id = "LR">
        <center>
           <form method="post" action="login_save.php" enctype="multipart/form-data">
           <h2>用户登录</h2>
          <p>姓名:<input type="text" name="Name"></p>
          <p>密码:<input type="password" name="Password"></p>
          <p>权限:<input type="radio" name="job" value="教师" checked>教师
          <input type="radio" name="job" value="学生">学生</p>
          <input type="submit"  value="登录">
        </form> 
        <br/>
         <form method="post" action="reg_save.php" enctype="multipart/form-data">
           <h2>用户注册</h2>
           <p>权限:<input type="radio" name="job" value="教师" checked>教师
          <input type="radio" name="job" value="学生">学生</p>
          <p>姓名:<input type="text" name="name"></p>
          <p>密码:<input type="password" name="password"></p>
          <input type="submit"  value="注册">
        </form> 
        </center>
    </div>
      <div>
    <p><b><a href='change_password.php'>修改密码</a></b></p>
    <p><b><a href='delete_user.php'>注销用户</a></b></p>
    </div>
    </center>

   <footer>
    版权归珠江学院所有
   </footer>
</body>
</html>