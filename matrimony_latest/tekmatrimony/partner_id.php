<?php
include_once("conn.php");
 $partner_id = $_POST['partner_id'];

    // Fetch the user data using the provided partner_id
    $fet = $xyz->prepare("SELECT * FROM wedding WHERE id = :partner_id");
    $fet->bindParam(':partner_id', $partner_id, PDO::PARAM_INT);
    $fet->execute();

    // Check if any rows were returned
    if ($fet->rowCount() > 0) {
        $data1 = $fet->fetch(PDO::FETCH_ASSOC); // Fetch as an associative array

        // Output the data as JSON
        echo json_encode($data1);
    } else {
        // No matching record found
        echo json_encode(array('error' => 'No user found with the provided partner_id'));
    }
?> 


    