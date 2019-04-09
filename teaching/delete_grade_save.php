<?php 
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
$con = mysql_connect("localhost","root","root"); 
if (!$con)   
{   
	die('Could not connect: ' . mysql_error());   
}  
mysql_select_db("teaching", $con);  

$result = mysql_query("SELECT * FROM score where id='$_GET[id]' and studentname='$_GET[studentname]'");
if( "$_GET[studentname]"=="" || "$_GET[id]"=="" )
{
	echo "<script>alert('不允许空值，成绩删除失败');location.href='record.php'</script>";
}
else{
   if(mysql_num_rows($result))
   {
      $sql="DELETE FROM score WHERE id='$_GET[id]' and studentname='$_GET[studentname]'"; 
      if (!mysql_query($sql,$con))
      {
          die('Error: ' . mysql_error());
      }
      else{
          echo "<script>alert('成绩删除成功');location.href='record.php'</script>";
      }
   }
   else
   {
       echo "<script>alert('学号姓名不匹配，成绩记录失败');location.href='record.php'</script>";
   }
}

mysql_close($con); 
?>