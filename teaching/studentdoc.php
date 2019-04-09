<!DOCTYPE html>
<html>
<head>
	<title>学生资料</title>
	<meta charset="utf-8">
	<link href="style.css" rel="stylesheet" type="text/css" /> 
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
</head>
 
<body>
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
        <div id = "stu_insert">
         <center>
          <form method="get" action="studentdoc_save.php" enctype="multipart/form-data">
           <h2>学生信息输入</h2>
           <p>学号ID:<input type="text" name="id"></p>
          <p>姓名:<input type="text" name="name"></p>
          <p>性别:<input type="radio" name="sex" value="男" checked>男
                 <input type="radio" name="sex" value="女">女
          </p>
          <p>专业:<input type="text" name="major"></p>
          <p>总成绩:<input type="number" name="grade"></p>
          <p>班级:<input type="text" name="class"></p>
          <input type="submit" value="提交">
        </form>
         </center>
        </div>
        <div id = "stu_delete">
        <center>
        <form method="get" action="delete_stu_save.php" enctype="multipart/form-data">
           <h2>删除学生</h2>
          <p>学号:<input type="text" name="id"></p> 
          <p>姓名:<input type="text" name="name"></p>       
          <input type="submit" value="提交">
        </form>
        </center>
        </div>

   <footer>
    版权归珠江学院所有
   </footer>
</body>
</html>