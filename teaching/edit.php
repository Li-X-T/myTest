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
        <li><a href="index.php">返回查看</a></li>
     </ul>
   </header>
<?php
error_reporting(0);
header("Content-type: text/html; charset=utf-8"); 
$con = mysql_connect("localhost","root","root");
$id=$_GET['id'];
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);

$result = mysql_query("SELECT * FROM score where id='".$id."'");
 

echo '<form method="get" action="edit_grade_save.php" enctype="multipart/form-data">';

 
while($row = mysql_fetch_array($result))
  {
 
  echo "<p><input name='studentname' value='".$row['studentname']."'</p>";
  echo "<p><textarea cols='50' rows='1' name='china'>".$row['china']."</textarea>";
  echo "<p><textarea cols='50' rows='1' name='maths'>".$row['maths']."</textarea>";
  echo "<p><input type='hidden' name='id' value='".$row['id']."'</p>";
 
  }
echo "</table>";

mysql_close($con);

echo '<input type="submit" value="更新">';
echo '</form>';
?>
   <footer>
    版权归珠江学院所有
   </footer>
</body>

</html>