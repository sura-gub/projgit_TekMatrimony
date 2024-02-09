<?php
include_once("conn.php");
$mydata = $_POST['user_email'];

// Fetch the user data using the provided email
$fet = $xyz->prepare("SELECT * FROM wedding WHERE email = :mydata");
$fet->bindParam(':mydata', $mydata, PDO::PARAM_STR); // Use PDO::PARAM_STR for email
$fet->execute();

// Check if any rows were returned
if ($fet->rowCount() > 0) {
    $data1 = $fet->fetch(PDO::FETCH_ASSOC); // Fetch as an associative array

    // Output the data as JSON
    echo json_encode($data1);
} else {
    // No matching record found
    echo json_encode(array('error' => 'No user found with the provided email'));
}
?>
