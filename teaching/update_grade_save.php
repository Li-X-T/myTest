<?php
header('Content-Type:text/html;charset=utf-8');
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);


$s = "SELECT * from score where id = '$_GET[id]' and studentname = '$_GET[studentname]'";
$result = mysql_query($s,$con);
if( "$_GET[id]"=="" || "$_GET[studentname]"=="" || "$_GET[china]"=="" ||  "$_GET[maths]"=="")
{
   	echo "<script>alert('不允许空值');location.href='updatedoc.php'</script>";
}
else
{
   if( "$_GET[china]"<0 ||  "$_GET[maths]"<0)
   {
   	echo "<script>alert('分数不能为负');location.href='updatedoc.php'</script>";
   }
   else
   {
      if (mysql_num_rows($result))
       {
        $sql="UPDATE score SET id = '$_GET[id]',studentname = '$_GET[studentname]', china = '$_GET[china]', maths = '$_GET[maths]' WHERE id = '$_GET[id]'";
       if (!mysql_query($sql,$con))
       {
           die('Error: ' . mysql_error());
       }
       else{
          echo "<script>alert('学生成绩记录修改成功');location.href='updatedoc.php'</script>";
       }
   }
   else{	
	     echo "<script>alert('没有此记录，成绩修改失败');location.href='updatedoc.php'</script>";
  }
}}
mysql_close($con)
?>