<?php
// Replace with your database connection
include_once("../conn.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'Accept') {
// Accept a friend request
$request_from = $_POST['request_from'];
$request_to = $_POST['request_to'];
$action = $_POST['action'];

// Use prepared statements to avoid SQL injection
$sql = "UPDATE friendrequest SET status = :action WHERE request_from = :request_from AND request_to = :request_to";
$stmt = $xyz->prepare($sql);
$stmt->bindParam(':action', $action, PDO::PARAM_STR);
$stmt->bindParam(':request_from', $request_from, PDO::PARAM_STR);
$stmt->bindParam(':request_to', $request_to, PDO::PARAM_STR);

if ($stmt->execute()) {
    echo "Accept success";
} else {
    echo "failed";
}
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'Reject') {
// Accept a friend request
$request_from = $_POST['request_from'];
$request_to = $_POST['request_to'];
$action = $_POST['action'];

// Use prepared statements to avoid SQL injection
$sql = "UPDATE friendrequest SET status = :action WHERE request_from = :request_from AND request_to = :request_to";
$stmt = $xyz->prepare($sql);
$stmt->bindParam(':action', $action, PDO::PARAM_STR);
$stmt->bindParam(':request_from', $request_from, PDO::PARAM_STR);
$stmt->bindParam(':request_to', $request_to, PDO::PARAM_STR);

if ($stmt->execute()) {
    echo "reject success";
} else {
    echo "failed";
}
}
?>
