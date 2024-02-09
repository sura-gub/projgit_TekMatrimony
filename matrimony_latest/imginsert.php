<?php
require(__DIR__ . '/matbase.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'));
    $imageFilename = $data->imageFilename;

    // Replace the following lines with your database connection and update code
    $servername = 'localhost';
    $username = 'mysql';
    $password = 'NULL';
    $dbname = 'id21282115_bluestar';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    // Insert 'upld_here.png' into the 'picture' field of the 'wedding' table
    $sql = "UPDATE wedding SET picture = '$imageFilename' WHERE ..."; // Replace '...' with your condition

    if ($conn->query($sql) === TRUE) {
        $success = true;
    } else {
        $success = false;
    }

    $conn->close();

    echo json_encode(['success' => $success]);
}
?>
