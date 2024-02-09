<?php
session_start();
require(__DIR__ . '/matbase.php');

if (isset($_POST['upacc2'])) {
    $upacc2 = $_POST['upacc2'];
	$statuspodravanga = $_POST['statuspodravanga1'];
	$yaarukpodranga = $_POST['yaarukpodranga1'];


    $res = $connect->prepare("UPDATE friendrequest SET status = '$upacc2' WHERE request_from='$statuspodravanga' and request_to='$yaarukpodranga'");
    if ($res->execute()) {
        echo "Accepted successfully";
    } else {
        echo "Error occurred during the request.";
    }
} 

if (isset($_POST['uprej2'])) {
    
    $uprej2 = $_POST['uprej2'];
    $upaaa2 = $_POST['upaaa2'];
    $upbbb2 = $_POST['upbbb2'];

    $res = $connect->prepare("UPDATE friendrequest SET status = :status WHERE request_from = :request_from AND request_to = :request_to");
    
    $res->bindParam(':status', $uprej2);
    $res->bindParam(':request_from', $upaaa2);
    $res->bindParam(':request_to', $upbbb2);

    if ($res->execute()) {
        echo "Rejected successfully";
    } else {
        echo "Error occurred during the request.";
    }
}

?>
