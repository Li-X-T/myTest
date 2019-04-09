<!DOCTYPE html>
<html>
<head>
	<title>成绩录入</title>
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
        <div id = "gra_insert">
        <center>
        <form method="get" action="record_save.php" enctype="multipart/form-data">
           <h2>成绩录入</h2>
           <p>学号:<input type="number" name="id"></p>
          <p>姓名:<input type="text" name="studentname"></p>
          <p>语文:<input type="number" name="china"></p>
          <p>数学:<input type="number" name="maths" ></p>         
          <input type="submit" value="提交">
        </form>
        </center>
        </div>
        <div id = "gra_delete">
        <center>
        <form method="get" action="delete_grade_save.php" enctype="multipart/form-data">
           <h2>成绩删除</h2>
          <p>学号:<input type="number" name="id"></p>
          <p>姓名:<input type="text" name="studentname"></p>      
          <input type="submit" value="提交">
        </form>
        </center>
        </div>
   <footer>
    版权归珠江学院所有
   </footer>
</body>
</html>