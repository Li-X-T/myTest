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
        <li>教学管理信息展示</li>
        <li><a href="select.php">搜索</a></li>
     </ul>
   </header>
   <center><h style = "font-size: 25px">成绩栏</h></center>
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
		<th>跳转编辑</th>
		<th>直接删除</th>
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
		  echo "<td><a href='edit.php?id=".$row['id']."'>编辑</a></td>";
		  echo "<td><a href='edit_deletegrade_save.php?id=".$row['id']."'>删除</a></td>";
		  echo "</tr>";
		  }
		echo "</table>";

		mysql_close($con);
	?>
<br/>
<center><h style = "font-size: 25px">教师栏</h></center>
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
<center><h style = "font-size: 25px">学生栏</h></center>
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

   <footer>
    版权归珠江学院所有
   </footer>
</body>

</html>