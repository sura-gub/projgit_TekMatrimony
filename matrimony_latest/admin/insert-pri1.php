<?php
session_start();
require(__DIR__ . '/../matbase.php');
if(isset($_POST['username']))
{
$uname=$_POST['username'];
$psw=$_POST['password'];
$abc=$connect->prepare("select * from adminlogin where name='$uname'and password='$psw'");
$abc->execute();
$aaa=$abc->rowCount();
if($aaa==1)
{
    $_SESSION['dev']=$uname;
    print "success";

}
else{
 print "invalid password";
}
}
?>