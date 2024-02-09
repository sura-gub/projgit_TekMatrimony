<?php
include_once("conn.php");

$userEmail = $_POST['user_email'];
$userName = $_POST['user_name'];
$dob = $_POST['dob'];
$profileFor = $_POST['profile_for'];
$marriedStatus = $_POST['married_status'];
$motherTongue = $_POST['mother_tongue'];
$state = $_POST['state'];
$educationDetails = $_POST['education_details'];
$employIn = $_POST['employ_in'];
$income = $_POST['income'];

$updtpro=$xyz->prepare("update wedding set name='$userName',dob='$dob',profile='$profileFor',marital='$marriedStatus',mother='$motherTongue',state='$state',education='$educationDetails',employed='$employIn',annual='$income' where email='$userEmail'");
$updtpro->execute();
            
if($updtpro == true){
    echo "success";
}else{
    echo"failed";
}
?>