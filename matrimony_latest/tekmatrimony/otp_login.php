<?php
include_once("conn.php");


$email=$_POST['useremail'];


$ppp=$xyz->prepare("select * from wedding where email='$email'");
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