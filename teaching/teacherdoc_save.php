<?php
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);

$s = "SELECT * from teacher where id = '$_GET[id]'";
$result = mysql_query($s,$con);
if (!mysql_num_rows($result))
{
   if( "$_GET[name]"!="" && "$_GET[sex]"!="" && "$_GET[id]"!="" && "$_GET[class]"!="")
   {
      $sql="INSERT INTO teacher (id,name, sex, class)VALUES('$_GET[id]','$_GET[name]','$_GET[sex]', '$_GET[class]')";
      if (!mysql_query($sql,$con))
      {
         die('Error: ' . mysql_error());
      }else{
      echo "<script>alert('教师资料记录成功');location.href='teacherdoc.php'</script>";
      }
   }else{
   	echo "<script>alert('不允许空值');location.href='teacherdoc.php'</script>";
   }
}
else{ 
	if( "$_GET[name]"=="" || "$_GET[sex]"=="" || "$_GET[id]"=="" || "$_GET[class]"=="")
   {echo "<script>alert('工号重复且不允许空值，教师资料记录失败');location.href='teacherdoc.php'</script>";}
  else{
   echo "<script>alert('工号重复，教师资料记录失败');location.href='teacherdoc.php'</script>";
  }
}
mysql_close($con)
 

?>