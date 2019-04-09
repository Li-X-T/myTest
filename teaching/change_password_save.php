 <?php
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);

$s = "SELECT * from user where name = '$_POST[name]' and password = '$_POST[password]'";
$result = mysql_query($s,$con);

if( "$_POST[password]"=="" || "$_POST[name]"=="" || "$_POST[newpassword]"=="")
   {
    echo "<script>alert('注意：不允许空值');location.href='change_password.php'</script>";
   }
else{
   if (mysql_num_rows($result))
   {
      $sql="UPDATE user SET password = '$_POST[newpassword]' WHERE name = '$_POST[name]' and password = '$_POST[password]'";
      if (!mysql_query($sql,$con))
      {
         die('Error: ' . mysql_error());
      }else{
         echo "<script>alert('密码修改成功，赶紧登录试试');location.href='login_reg.php'</script>";
      }
   }
   else{  
      echo "<script>alert('用户不存在或密码错误，密码修改失败');location.href='change_password.php'</script>";
   }
}
mysql_close($con)
?>