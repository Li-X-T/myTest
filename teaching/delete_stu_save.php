<?php 
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
$con = mysql_connect("localhost","root","root"); 
if (!$con)   
{   
	die('Could not connect: ' . mysql_error());   
}  
mysql_select_db("teaching", $con);  

$result = mysql_query("SELECT * FROM student where id='$_GET[id]' and name='$_GET[name]'");
if( "$_GET[name]"=="" || "$_GET[id]"=="" )
{
	echo "<script>alert('不允许空值，教师资料记录失败');location.href='studentdoc.php'</script>";
}
else{
   if(mysql_num_rows($result))
   {
      $sql="DELETE FROM student WHERE id='$_GET[id]' and name='$_GET[name]'"; 
      if (!mysql_query($sql,$con))
      {
          die('Error: ' . mysql_error());
      }
      else{
          echo "<script>alert('学生资料删除成功');location.href='studentdoc.php'</script>";
      }
   }
   else
   {
       echo "<script>alert('学号姓名不匹配，学生资料记录失败');location.href='studentdoc.php'</script>";
   }
}

mysql_close($con); 
?>