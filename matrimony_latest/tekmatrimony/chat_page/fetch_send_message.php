<?php
include_once("../conn.php");

// Get the data from the Flutter application
$user_email = $_POST['user_email'];
$patner_email = $_POST['patner_email'];

 $res_prd = $xyz->prepare("SELECT * FROM chat_page WHERE sender_email = '$user_email' AND reciver_email = '$patner_email'");
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);

?>