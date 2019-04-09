<?php
header('Content-Type:text/html;charset=utf-8');
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);


$s = "SELECT * from student where id = '$_GET[id]'";
$result = mysql_query($s,$con);
if( "$_GET[id]"=="" || "$_GET[name]"=="" || "$_GET[sex]"=="" || "$_GET[major]"=="" || "$_GET[grade]"=="" || "$_GET[class]"=="")
  {
   	echo "<script>alert('不允许空值');location.href='updatedoc.php'</script>";
   }
   else{
      if( "$_GET[grade]"<0)
      {
          echo "<script>alert('分数不能为负');location.href='updatedoc.php'</script>";
      }
      else{
         if (mysql_num_rows($result))
         {
             $sql="UPDATE student SET id = '$_GET[id]', name = '$_GET[name]',sex = '$_GET[sex]',major = '$_GET[major]',grade = '$_GET[grade]',class = '$_GET[class]' WHERE id = '$_GET[id]'";
             if (!mysql_query($sql,$con))
             {
                die('Error: ' . mysql_error());
             }else{
                 echo "<script>alert('学生记录修改成功');location.href='updatedoc.php'</script>";
             }
         }
         else{	
	           echo "<script>alert('没有此记录，学生记录修改失败');location.href='updatedoc.php'</script>";
         }
      }
}

mysql_close($con)
?>