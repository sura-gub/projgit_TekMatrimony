<?php
include_once("../conn.php");

// Get the data from the Flutter application
$request_from = $_POST['request_from'];


 $res_prd = $xyz->prepare("SELECT * FROM friendrequest WHERE request_from = '$request_from' AND status = 'Accept'");
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);

?>