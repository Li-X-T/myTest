<?php
header('Content-Type:text/html;charset=utf-8');
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);


$s = "SELECT * from score where id = '$_GET[id]'";
$result = mysql_query($s,$con);

if( "$_GET[china]"<0 ||  "$_GET[maths]"<0)
   {
    echo "<script>alert('分数不能为负');location.href='record.php'</script>";
   }
else
{
if (!mysql_num_rows($result))
{
   if( "$_GET[id]"!="" && "$_GET[studentname]"!="" && "$_GET[china]"!="" && "$_GET[maths]"!="")
   {
       $sql="INSERT INTO score (id,studentname, china,maths)VALUES('$_GET[id]','$_GET[studentname]','$_GET[china]','$_GET[maths]')";
       if (!mysql_query($sql,$con))
       {
           die('Error: ' . mysql_error());
       }else{
       echo "<script>alert('学生成绩记录成功');location.href='record.php'</script>";
       }
   }
   else{
   	echo "<script>alert('不允许空值');location.href='record.php'</script>";
   }
}  
else{
	  if( "$_GET[id]"=="" ||"$_GET[studentname]"=="" || "$_GET[china]"=="" || "$_GET[maths]"=="")
      {echo "<script>alert('学号重复且不允许空值，成绩记录失败');location.href='record.php'</script>";}
    else{
	   echo "<script>alert('学号重复，成绩记录失败');location.href='record.php'</script>";
    }
   }      
}
mysql_close($con);

?>