<!DOCTYPE html>
<html>
<head>
	<title>教学管理系统</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css" /> 
</head>
<style>
  table{
  	width:100%;
  }
  table tr{
  	background-color: #f6f6f6;
    height:30px;
  }
  table tr td{
   text-align: center;
  }
</style>

<body>
<header >
    <ul>
        <li><a href="index.php">返回</a></li>
    </ul>
   </header>
<br>
  <center>        
   <input type="text" name="username" id="username">
   <input type="submit" onclick="seek()" value="搜索学生成绩">
    </center> 
    <br>
    <hr> 

   <div id="content">
      
    </div> 

    <script>

   function seek()
  {
      username=document.getElementById('username').value;
      txt="";
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
      // IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
      xmlhttp=new XMLHttpRequest();
    }
    else
    {
      // IE6, IE5 浏览器执行代码
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
         
       var data=eval("("+xmlhttp.responseText+")"); 
       alert('姓名:'+data[0]['studentname']+' 语文:'+data[0]['china']+' 数学:'+data[0]['maths']);
       txt+="<table><tr><th>姓名</th><th>语文</th><th>数学</th></tr><tr><td>"+data[0]['studentname']+"</td><td>"+data[0]['china']+"</td><td>"+data[0]['maths']+"</td></tr></table>"
       //txt+="<p>姓名："+data[0]['name']+"</p>"  
       //txt+="<p>水费："+data[0]['waterrate']+"</p>"  
       //txt+="<p>电费："+data[0]['electricrate']+"</p>"
       //txt+="<p>总共："+data[0]['total']+"</p>"    
       document.getElementById("content").innerHTML=txt;
      }
    }
    xmlhttp.open("get","seek_save.php?username="+username,true);
    xmlhttp.send();
  }
    
    </script>
<br>
   <hr>  <br> 
 <center>      
    <form action="select.php" method="post" enctype="multipart/form-data">
   <input type="text" name="name">
   <input type="submit" value="搜索人员">
    </form>
    </center> 
   <br>
    <hr> 

     <div >
<center><h style = "font-size: 25px">学生栏</h></center>
    <?php
      error_reporting(0);
      if(!empty($_POST)){
    $con = mysql_connect("localhost","root","root");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    
    mysql_select_db("teaching", $con);
    
    $result = mysql_query("SELECT * FROM student where name='".$_POST['name']."'");
   
    echo "<table border='0'>
    <tr>
    <th>学号</th>
    <th>姓名</th>
    <th>性别</th>
    <th>专业</th>
    <th>总成绩</th>
    <th>班级</th>
    </tr>";

    while($row = mysql_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['sex'] . "</td>";
      echo "<td>" . $row['major'] . "</td>";
      echo "<td>" . $row['grade'] . "</td>";
      echo "<td>" . $row['class'] . "</td>";
      echo "</tr>";
      }

    echo "</table>";
   
    mysql_close($con);
                  
       }           
    ?>    
    </div> 
<br>
  <div >
  <center><h style = "font-size: 25px">教师栏</h></center>
    <?php
      error_reporting(0);
      if(!empty($_POST)){
    $con = mysql_connect("localhost","root","root");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    
    mysql_select_db("teaching", $con);
    
    $result = mysql_query("SELECT * FROM teacher where name='".$_POST['name']."'");
    
   echo "<table border='0'>
    <tr>
    <th>工号</th>
    <th>姓名</th>
    <th>性别</th>
    <th>课程</th>
    </tr>";

    while($row = mysql_fetch_array($result))
      {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td>" . $row['sex'] . "</td>";
      echo "<td>" . $row['class'] . "</td>";
      echo "</tr>";
      }

    echo "</table>";
    
    mysql_close($con);
                  
       }           
    ?>    
    </div> 


 <footer>
    版权归珠江学院所有
   </footer>
</body>

</html>