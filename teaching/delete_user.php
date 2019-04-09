<!DOCTYPE html>
<html>
<head>
  <title>注销用户</title>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet" type="text/css" /> 
</head>

<body>
   <header >
    <ul>
        <li><a href="login_reg.php">返回登录</a></li>
    </ul>
   </header>
        <center>
        <form method="post" action="delete_user_save.php" enctype="multipart/form-data">
           <h2>注销用户</h2>
          <p>姓名:<input type="text" name="name"></p> 
          <p>密码:<input type="password" name="password"></p>       
          <input type="submit" value="提交">
        </form>
        </center>


   <footer>
    版权归珠江学院所有
   </footer>
</body>
</html>