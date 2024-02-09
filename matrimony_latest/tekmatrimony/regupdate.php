<?php
include_once("conn.php");

$marriedlvl=$_POST['marriedlvl'];
$children=$_POST['children'];
$height=$_POST['height'];
$familystatus=$_POST['familystatus'];
$familytype=$_POST['familytype'];
$familyvalues=$_POST['familyvalues'];
$disabilities=$_POST['disabilities'];
$uptemail=$_POST['emailid'];


$updt=$xyz->prepare("update wedding set marital='$marriedlvl',childrens='$children',height='$height',famstatus='$familystatus',famtype='$familytype',famvalue='$familyvalues',disability='$disabilities' where email='$uptemail'");
$updt->execute();
            
if($updt == true){
    echo json_encode("successfully");
}else{
    echo"failed";
}

?>