<?php
include_once("conn.php");

// Get the data from the Flutter application
$profile_for = $_POST['profile'];
$username = $_POST['uname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$religion = $_POST['religion'];
$caste = $_POST['caste'];
$tongue = $_POST['tongue'];
$mobileno = $_POST['mobileno'];
$email = $_POST['email'];
$password = $_POST['password'];

try{
$ppp=$xyz->prepare("select * from wedding where email='$email'");
$ppp->execute();
$www=$ppp->rowCount();
if($www > 0)
    {
    echo json_encode("This Email is Already Registered");
    }
    else
    {
      
            $new=$xyz->prepare("INSERT INTO wedding(profile, name, gender, mobile, dob, religion, mother, email, password, caste, willing, subcaste, gothram, suddha, marital, childrens, height, living, famstatus, famtype, famvalue, disability, highestedu, education, employed, occupation, annual, amount, payment, location, state, comments, picture, otp, randmcd) VALUES ('$profile_for', '$username', '$gender', '$mobileno', '$dob','$religion', '$tongue', '$email', '$password', '$caste', '','','','','','','','','','','','','','','','','','','','','','','',0,'')");
            $new->execute();
        
        if($new == true){
           echo json_encode("Registration successful");
        }else{
            echo json_encode("Registration Error");
        }
        
    }
 } catch (PDOException $e) {
            echo json_encode("Error: " . $e->getMessage());
        }   
    
?>