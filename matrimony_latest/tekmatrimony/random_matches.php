<?php
include_once("conn.php");

$email = $_POST['user_email'];

// Fetch the user data using the provided email
$fet = $xyz->prepare("SELECT * FROM wedding WHERE email = :email");
$fet->bindParam(':email', $email, PDO::PARAM_STR);
$fet->execute();

// Check if the user with the provided email exists
$fetchdata = $fet->rowCount();
$fetchuser = $fet->fetch(PDO::FETCH_ASSOC);

if ($fetchdata > 0) {
    // User with the provided email exists

    // Fetch users with a different gender and the same religion
    $res_prd = $xyz->prepare("SELECT * FROM wedding WHERE gender != :gender AND mother = :mother");
    $res_prd->bindParam(':gender', $fetchuser['gender'], PDO::PARAM_STR);
    $res_prd->bindParam(':mother', $fetchuser['mother'], PDO::PARAM_STR);
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);
} else {
    // User with the provided email does not exist
    echo "User not found";
}
?>