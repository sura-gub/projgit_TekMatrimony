<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['user_image']) && isset($_POST['user_email'])) {
        $targetDir = 'uploads/';
        
        if (is_writable($targetDir)) {
            $tempFileName = $_FILES['user_image']['tmp_name'];
            $newFileName = uniqid() . '.jpg';
            $targetFilePath =$targetDir.$newFileName;
            
            if (move_uploaded_file($tempFileName, $targetFilePath)) {
                // Image uploaded successfully
                $imagePath = $newFileName;
                $userEmail = $_POST['user_email'];
                // Database connection details (replace with your own)
                include_once("conn.php");

                // Create a database connection

                // Insert $imagePath into your database using MySQLi
                
                
                $updtpro=$xyz->prepare("update wedding set picture='$imagePath' where email='$userEmail'");
                $updtpro->execute();
                            
                if($updtpro == true){
                    echo "success";
                }else{
                    echo"failed";
                }

                
            } else {
                $response = array('status' => 'error', 'message' => 'Failed to move the uploaded file.');
                echo json_encode($response);
            }
        } else {
            $response = array('status' => 'error', 'message' => 'Target directory is not writable.');
            echo json_encode($response);
        }
    } else {
        $response = array('status' => 'error', 'message' => 'No file uploaded.');
        echo json_encode($response);
    }
} else {
    $response = array('status' => 'error', 'message' => 'Invalid request method.');
    echo json_encode($response);
}

// include_once("conn.php");
//  $image = $_FILES['pickedImage'];
 
//  $imagepath = 'uploads/'.$image;
//  $tmp_name = $_FILES['pickedImage']['tmp_name'];
 
//  move_uploaded_file($tmp_name,$imagepath);
 
//  $new=$xyz->prepare("INSERT INTO image (pic) VALUES ('$image')");
// $new->execute();

// if($new == true){
//     echo "success";
// }else{
//     echo"failed";
// }
 
?>
