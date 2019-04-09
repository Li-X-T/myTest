<?php
header('Content-Type:text/html;charset=utf-8');
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);


$s = "SELECT * from student where id = '$_GET[id]' ";
$result = mysql_query($s,$con);

if( "$_GET[grade]"<0)
   {
    echo "<script>alert('分数不能为负');location.href='studentdoc.php'</script>";
   }
else{

if (!mysql_num_rows($result))
{

   if( "$_GET[name]"!="" && "$_GET[sex]"!="" && "$_GET[id]"!="" && "$_GET[major]"!="" && "$_GET[grade]"!="" && "$_GET[class]"!="")
   {
       $sql="INSERT INTO student (id, name, sex, major, grade, class)VALUES('$_GET[id]','$_GET[name]','$_GET[sex]','$_GET[major]','$_GET[grade]','$_GET[class]')";
       if (!mysql_query($sql,$con))
       {
           die('Error: ' . mysql_error());
       }else{
       echo "<script>alert('学生资料记录成功');location.href='studentdoc.php'</script>";
       }
    }else{
   	echo "<script>alert('不允许空值');location.href='studentdoc.php'</script>";
   }
}
else{
	if( "$_GET[name]"=="" || "$_GET[sex]"=="" || "$_GET[id]"=="" || "$_GET[major]"=="" || "$_GET[grade]"=="" || "$_GET[class]"=="")
   {echo "<script>alert('学号重复且不允许空值，学生资料记录失败');location.href='studentdoc.php'</script>";}
 else{
	echo "<script>alert('学号重复，学生资料记录失败');location.href='studentdoc.php'</script>";}
}
}

mysql_close($con)
 

?>