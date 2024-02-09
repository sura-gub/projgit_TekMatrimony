<?php
include_once("conn.php");


$email=$_POST['useremail'];
$pass=$_POST['userpassword'];

$ppp=$xyz->prepare("select * from wedding where email='$email' and password='$pass'");
$ppp->execute();
$www=$ppp->rowCount();
if($www==1)
    {
    echo json_encode("successfully");
    }
    else
    {
    echo json_encode("Error");
    }

?>