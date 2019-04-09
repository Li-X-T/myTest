<!DOCTYPE html>
<html>
<head>
	<title>教师资料</title>
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
      <div id = "tea_insert">
         <center>
        <form method="get" action="teacherdoc_save.php" enctype="multipart/form-data">
           <h2>教师资料输入</h2>
           <p>工号:<input type="number" name="id"></p>
          <p>姓名:<input type="text" name="name"></p>
          <p>性别:<input type="radio" name="sex" value="男" checked>男
                 <input type="radio" name="sex" value="女">女</p>
          <p>课程:<input type="text" name="class"></p>
          <input type="submit" value="提交">
        </form> 
       </center>
       </div> 
        <div id = "tea_delete">
         <center>
        <form method="get" action="delete_Tea_save.php" enctype="multipart/form-data">
           <h2>删除教师</h2>
           <p>工号:<input type="number" name="id"></p>
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