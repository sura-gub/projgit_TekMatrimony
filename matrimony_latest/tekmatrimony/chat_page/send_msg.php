<?php
include_once("../conn.php");

// Get the data from the Flutter application
$request_from = $_POST['request_from'];
$request_to = $_POST['request_to'];
$text = $_POST['text'];

$requ=$xyz->prepare("INSERT INTO chat_page (sender_email, reciver_email, message) VALUES ('$request_from', '$request_to','$text')");
$requ->execute();

if($requ == true){
    echo json_encode("Request sent");
}else{
   echo json_encode("not Sent");
}


?>