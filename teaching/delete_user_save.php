<?php 
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
$con = mysql_connect("localhost","root","root"); 
if (!$con)   
{   
  die('Could not connect: ' . mysql_error());   
}  
mysql_select_db("teaching", $con);  

$result = mysql_query("SELECT * FROM user where name='$_POST[name]' and password ='$_POST[password]'");
if( "$_POST[name]"=="" || "$_POST[password]"=="" )
{
  echo "<script>alert('注意：不允许空值');location.href='delete_user.php'</script>";
}
else{
   if(mysql_num_rows($result))
   {
      $sql="DELETE FROM user WHERE  name='$_POST[name]' and password ='$_POST[password]' "; 
      if (!mysql_query($sql,$con))
      {
          die('Error: ' . mysql_error());
      }
      else{
         echo "<script>alert('注销成功，请重新注册吧');location.href='login_reg.php'</script>";
      }
   }
   else
   {
       echo "<script>alert('用户不存在或密码错误，注销失败');location.href='delete_user.php'</script>";
   }
}
mysql_close($con); 
?>