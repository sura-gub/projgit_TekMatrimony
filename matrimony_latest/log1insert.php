<?php
session_start();
require(__DIR__ . '/matbase.php');
if(isset($_POST['usna2']))
{
	$usr=$_POST['usna2'];
	$pwd=$_POST['pwd2'];
	$res=$connect->prepare("select * from wedding where email='$usr' and password='$pwd'");
	$res->execute();
	$num=$res->rowcount();
	if($num>0)
	{
		$_SESSION['loger']=$usr;
		print "success";
	}
	else
	{
		print "Invalid username and password";
	}
}	

?>