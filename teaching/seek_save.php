
<?php
header('Content-Type:text/html;charset=utf-8');
 $key=$_GET['username'];
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);

$result=mysql_query("select * from score where studentname='".$key."'");


//把数据查询记录转为数组
$results = array(); 
while ($row = mysql_fetch_assoc($result)) 
{ 
$results[] = $row; 
}  

//把数组转为JSON输出
echo json_encode($results); 
?>