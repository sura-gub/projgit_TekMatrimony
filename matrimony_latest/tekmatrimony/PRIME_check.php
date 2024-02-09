<?php

include_once("conn.php");


$useremail = $_POST['useremail'];
$action = $_POST['action'];


$ppp=$xyz->prepare("select * from wedding where email='$useremail' and payment='$action'");
$ppp->execute();
$www=$ppp->rowCount();
if($www==1)
    {
    echo json_encode("prime successfully");
    }
    else
    {
    echo json_encode("Error");
    }

?>
