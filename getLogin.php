<?php
$uname=$_GET['uname1'];
$pass=$_GET['pass1'];
include 'sql.php';
$username="";
$str="select * from login where username='$uname' and password='$pass' and ActiveFlag=1";
$res=mysqli_query($sql,$str);
if(mysqli_num_rows($res)>0)
{
    $arr=mysqli_fetch_assoc($res);
    $username=$arr['username'];
}
echo $username;