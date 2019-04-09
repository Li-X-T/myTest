<?php
error_reporting(0);
header('Content-Type:text/html;charset=utf-8');
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);

$s = "SELECT * from user where name = '$_POST[name]'";
$result = mysql_query($s,$con);
if (!mysql_num_rows($result))
{
   if( "$_POST[name]"!="" && "$_POST[password]"!="" && "$_POST[job]"!="")
   {
      $sql="INSERT INTO user (name, password,job)VALUES('$_POST[name]','$_POST[password]','$_POST[job]')";
      if (!mysql_query($sql,$con))
      {
         die('Error: ' . mysql_error());
      }else{
      echo "<script>alert('注册成功');location.href='login_reg.php'</script>";
      }
   }
   else {echo "<script>alert('不允许输入空值，注册失败');location.href='login_reg.php'</script>";}
}
else
	{echo "<script>alert('用户名已被注册，注册失败');location.href='login_reg.php'</script>";}

mysql_close($con)
 

?>