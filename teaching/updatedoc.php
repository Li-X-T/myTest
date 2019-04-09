<!DOCTYPE html>
<html>
<head>
	<title>学生资料修改</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css" /> 
  <style>
  table{
    width:80%;
    margin:0 auto;
  }
  table tr{
    background-color: #f6f6f6;
    height:10px;
  }
  table tr td{
   text-align: center;
  }
</style>
</head>
<body>
<header> 
<ul>
    <li><a href="#gra_update">成绩修改</a></li>
    <li><a href="#tea_update">教师修改</a></li>
    <li><a href="#stu_update">学生修改</a></li>
</ul>
</header>
<center><h style = "font-size: 25px;background-color:#00E5EE">成绩栏</h></center>
<div id = "gra_update">
        <center>
        <form method="get" action="update_grade_save.php" enctype="multipart/form-data">
           <h2>成绩修改</h2>
          <p>学号:<input type="text" name="id"></p>
           <p>姓名:<input type="text" name="studentname"></p>
          <p>语文:<input type="number" name="china"></p>
          <p>数学:<input type="number" name="maths" ></p>         
          <input type="submit" value="提交">
          <p>注意:修改分数请输入正确的学号与姓名</p>
        </form>
        </center>
</div><br/>
    <?php
    $con = mysql_connect("localhost","root","root");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }
    mysql_select_db("teaching", $con);

    $result = mysql_query("SELECT * FROM score");

    echo "<table border='0'>
    <tr>
    <th>ID</th>
    <th>姓名</th>
    <th>语文</th>
    <th>数学</th>
    <th>总分</th>
    </tr>";

    while($row = mysql_fetch_array($result))
      {
        $a=array($row['china'],$row['maths']);
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['studentname'] . "</td>";
      echo "<td>" . $row['china'] . "</td>";
      echo "<td>" . $row['maths'] . "</td>";
      echo "<td>" . array_sum($a) . "</td>";
      echo "</tr>";
      }
    echo "</table>";

    mysql_close($con);
  ?>

<br/>
<center><h style = "font-size: 25px;background-color:#00E5EE">学生栏</h></center>
    <div id = "stu_update"  scrolling="auto">
        <center>
        <form method="get" action="update_stu_save.php" enctype="multipart/form-data">
           <h2>学生信息修改</h2>
          <p>学号:<input type="text" name="id"></p>
          <p>姓名:<input type="text" name="name"></p>
          <p>性别:<input type="radio" name="sex" value="男" checked>男
                 <input type="radio" name="sex" value="女">女
          </p>
          <p>专业:<input type="text" name="major"></p>
          <p>总成绩:<input type="number" name="grade"></p>
          <p>班级:<input type="text" name="class"></p>
          <input type="submit" value="提交">
          <p>注意:修改学生信息请输入正确的学号</p>
        </form>
        </center>
</div><br/>
  <?php
    $con = mysql_connect("localhost","root","root");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }

    mysql_select_db("teaching", $con);

    $result = mysql_query("SELECT * FROM student");

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
  ?>

  <br/>
  <center><h style = " font-size: 25px;background-color:#00E5EE">教师栏</h></center>
     <div id = "tea_update">
        <center>
        <form method="get" action="update_tea_save.php" enctype="multipart/form-data">
           <h2>教师信息修改</h2>
          <p>工号:<input type="text" name="id"></p>
          <p>姓名:<input type="text" name="name"></p>
          <p>性别:<input type="radio" name="sex" value="男" checked>男
                 <input type="radio" name="sex" value="女">女
          </p>
          <p>课程:<input type="text" name="class"></p>
          <input type="submit" value="提交">
          <p>注意:修改教师信息请输入正确的工号</p>
        </form>
        </center>
      </div><br/>
  <?php
    $con = mysql_connect("localhost","root","root");
    if (!$con)
      {
      die('Could not connect: ' . mysql_error());
      }

    mysql_select_db("teaching", $con);

    $result = mysql_query("SELECT * FROM teacher");

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
  ?> 
  

<br/>

   <footer>
    版权归珠江学院所有
   </footer>
</body>
</html>