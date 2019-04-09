<?php
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
$con = mysql_connect("localhost","root","root");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("teaching", $con);

$sql="SELECT * FROM user where name= '$_POST[Name]'  and password= '$_POST[Password]' and job= '$_POST[job]' ";
$result = mysql_query($sql,$con);
$display=mysql_fetch_array($result);
session_start();
$_SESSION['name']=$display[1];
echo $_SESSION['name'];
if( "$_POST[Name]"=="" || "$_POST[Password]"=="" || "$_POST[job]"=="")
{
   echo "<script>alert('不允许空值');location.href='login_reg.php'</script>";
}  
else{
if (mysql_num_rows($result))
  { 
   if("$_POST[job]"=="教师"){
   echo "<script>alert('登录成功');location.href='home.html'</script>";
   }
   if("$_POST[job]"=="学生"){
   echo "<script>alert('登录成功');location.href='home2.html'</script>";
   }
  }
  else{        
      echo "<script>alert('登录失败，请正确输入账号密码');location.href='login_reg.php'</script>";   
  }
}
if (!mysql_query($sql,$con))
      {
         die('Error: ' . mysql_error());
      }

mysql_close($con)
?>