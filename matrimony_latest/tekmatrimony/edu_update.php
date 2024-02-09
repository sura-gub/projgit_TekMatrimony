<?php
include_once("conn.php");

$higher_educationl=$_POST['higher_education'];
$edu_details=$_POST['edu_details'];
$employ_in=$_POST['employ_in'];
$income=$_POST['income'];
$work_location=$_POST['work_location'];
$state=$_POST['state'];
$fdback=$_POST['fdback'];
$user_email=$_POST['user_email'];


$updt=$xyz->prepare("update wedding set highestedu='$higher_educationl',education='$edu_details',employed='$employ_in',annual='$income',location='$work_location',state='$state',comments='$fdback' where email='$user_email'");
$updt->execute();
            
if($updt == true){
    echo "success";
}else{
    echo"failed";
}

?>