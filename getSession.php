<?php
session_start();
$valid=0;
if(isset($_SESSION['islogin']))
{
    $valid=1;
}
echo $valid;