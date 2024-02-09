<?php
include_once("../conn.php");

// Get the data from the Flutter application
$request_to = $_POST['request_to'];


 $res_prd = $xyz->prepare("SELECT * FROM friendrequest WHERE request_to = '$request_to' AND status = 'Reject'");
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);

?>