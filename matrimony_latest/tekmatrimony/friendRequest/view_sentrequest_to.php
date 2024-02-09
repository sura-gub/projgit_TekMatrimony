<?php
include_once("../conn.php");

// Get the data from the Flutter application
$request_to_list = json_decode($_POST['request_to']); // Decode the JSON list

$datas = array(); // Initialize an array to store results

foreach ($request_to_list as $request_to) {
    // Perform a database query for each request_from value
    $res_prd = $xyz->prepare("SELECT * FROM wedding WHERE email = ?");
    $res_prd->bindParam(1, $request_to);
    $res_prd->execute();

    // Fetch and store the results
    $data = $res_prd->fetchAll(PDO::FETCH_ASSOC);
    $datas = array_merge($datas, $data);
}

echo json_encode($datas); // Return the combined results as JSON
?>
