<?php
include_once("conn.php");

$email = $_POST['user_email'];

// Use the DELETE SQL statement with the WHERE clause to specify the condition
$fet = $xyz->prepare("DELETE FROM wedding WHERE email = :email");
$fet->bindParam(':email', $email, PDO::PARAM_STR);
$fet->execute();

if($fet == true){
    echo json_encode("successfully");
}else{
    echo"failed";
}
?>
