<?php
include_once("../conn.php");

// Get the data from the Flutter application
$request_from = $_POST['request_from'];
$request_to = $_POST['request_to'];


$ppp=$xyz->prepare("select * from friendrequest where request_from='$request_from' and request_to='$request_to'");
$ppp->execute();
$www=$ppp->rowCount();
if($www==1)
    {
    echo json_encode("Already you sent request");
    }
    else
    {
    echo json_encode("not Sent");
    }

// Create a prepared statement with placeholders



?>