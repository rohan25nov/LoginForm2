<?php
$uname=$_GET['uname'];
session_start();
if(!isset($_SESSION['islogin']))
{
    $_SESSION['islogin']=true;
    $_SESSION['username']=$uname;
}
