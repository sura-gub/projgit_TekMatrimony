<?php
include_once("conn.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'caste') {

$email = $_POST['user_email'];
$selectedvalue = $_POST['selectedvalue'];

// Fetch the user data using the provided email
$fet = $xyz->prepare("SELECT * FROM wedding WHERE email = :email");
$fet->bindParam(':email', $email, PDO::PARAM_STR);
$fet->execute();

// Check if the user with the provided email exists
$fetchdata = $fet->rowCount();
$fetchuser = $fet->fetch(PDO::FETCH_ASSOC);

if ($fetchdata > 0) {
    // User with the provided email exists

    // Fetch users with a different gender
    $res_prd = $xyz->prepare("SELECT * FROM wedding WHERE gender != :gender AND caste = :selectedvalue ORDER BY id DESC");
    $res_prd->bindParam(':gender', $fetchuser['gender'], PDO::PARAM_STR);
    $res_prd->bindParam(':selectedvalue', $selectedvalue, PDO::PARAM_STR);
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);
} else {
    // User with the provided email does not exist
    echo "User not found";
}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'religion') {

$email = $_POST['user_email'];
$selectedvalue = $_POST['selectedvalue'];

// Fetch the user data using the provided email
$fet = $xyz->prepare("SELECT * FROM wedding WHERE email = :email");
$fet->bindParam(':email', $email, PDO::PARAM_STR);
$fet->execute();

// Check if the user with the provided email exists
$fetchdata = $fet->rowCount();
$fetchuser = $fet->fetch(PDO::FETCH_ASSOC);

if ($fetchdata > 0) {
    // User with the provided email exists

    // Fetch users with a different gender
    $res_prd = $xyz->prepare("SELECT * FROM wedding WHERE gender != :gender AND  = :selectedvalue ORDER BY id DESC");
    $res_prd->bindParam(':gender', $fetchuser['gender'], PDO::PARAM_STR);
    $res_prd->bindParam(':selectedvalue', $selectedvalue, PDO::PARAM_STR);
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);
} else {
    // User with the provided email does not exist
    echo "User not found";
}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'education') {

$email = $_POST['user_email'];
$selectedvalue = $_POST['selectedvalue'];

// Fetch the user data using the provided email
$fet = $xyz->prepare("SELECT * FROM wedding WHERE email = :email");
$fet->bindParam(':email', $email, PDO::PARAM_STR);
$fet->execute();

// Check if the user with the provided email exists
$fetchdata = $fet->rowCount();
$fetchuser = $fet->fetch(PDO::FETCH_ASSOC);

if ($fetchdata > 0) {
    // User with the provided email exists

    // Fetch users with a different gender
    $res_prd = $xyz->prepare("SELECT * FROM wedding WHERE gender != :gender AND highestedu = :selectedvalue ORDER BY id DESC");
    $res_prd->bindParam(':gender', $fetchuser['gender'], PDO::PARAM_STR);
    $res_prd->bindParam(':selectedvalue', $selectedvalue, PDO::PARAM_STR);
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);
} else {
    // User with the provided email does not exist
    echo "User not found";
}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'state') {

$email = $_POST['user_email'];
$selectedvalue = $_POST['selectedvalue'];

// Fetch the user data using the provided email
$fet = $xyz->prepare("SELECT * FROM wedding WHERE email = :email");
$fet->bindParam(':email', $email, PDO::PARAM_STR);
$fet->execute();

// Check if the user with the provided email exists
$fetchdata = $fet->rowCount();
$fetchuser = $fet->fetch(PDO::FETCH_ASSOC);

if ($fetchdata > 0) {
    // User with the provided email exists

    // Fetch users with a different gender
    $res_prd = $xyz->prepare("SELECT * FROM wedding WHERE gender != :gender AND state = :selectedvalue ORDER BY id DESC");
    $res_prd->bindParam(':gender', $fetchuser['gender'], PDO::PARAM_STR);
    $res_prd->bindParam(':selectedvalue', $selectedvalue, PDO::PARAM_STR);
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);
} else {
    // User with the provided email does not exist
    echo "User not found";
}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'salary') {

$email = $_POST['user_email'];
$selectedvalue = $_POST['selectedvalue'];

// Fetch the user data using the provided email
$fet = $xyz->prepare("SELECT * FROM wedding WHERE email = :email");
$fet->bindParam(':email', $email, PDO::PARAM_STR);
$fet->execute();

// Check if the user with the provided email exists
$fetchdata = $fet->rowCount();
$fetchuser = $fet->fetch(PDO::FETCH_ASSOC);

if ($fetchdata > 0) {
    // User with the provided email exists

    // Fetch users with a different gender
    $res_prd = $xyz->prepare("SELECT * FROM wedding WHERE gender != :gender AND annual = :selectedvalue ORDER BY id DESC");
    $res_prd->bindParam(':gender', $fetchuser['gender'], PDO::PARAM_STR);
    $res_prd->bindParam(':selectedvalue', $selectedvalue, PDO::PARAM_STR);
    $res_prd->execute();

    // Fetch the results
    $datas = $res_prd->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($datas);
} else {
    // User with the provided email does not exist
    echo "User not found";
}
}

?>
