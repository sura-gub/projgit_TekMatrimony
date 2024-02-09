<?php 
session_start();
require(__DIR__ . '/../matbase.php');
?> 

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Male</title>
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@400;500;600&family=Petit+Formal+Script&display=swap" rel="stylesheet">  -->

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style5.css" rel="stylesheet">

</head>
<?php
if(!isset($_SESSION['dev']))
{
?>
<script>
   window.location.href="adlogin.php";
   </script>
<?php
}
?>
<style>
    body {
        /* background-color:pink; */
        background-image: url(./img/bk1.jpg);

    }

    .card {
        background-color: rgb(265, 265, 265, 0.3);
        box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.3);
        padding: 0px;
        transition: transform 0.3s, box-shadow 0.3s;
        /* Add transitions for transform and box-shadow */
    }

    .card:hover {
        transform: scale(1.05);
        /* Increase the scale on hover */
        box-shadow: 5px 10px 20px rgba(20, 20, 20, 0.5);
        /* Adjust the shadow on hover */
    }

    .card:hover .card-title {
        color: Black;
        /* Change the text color on hover */
    }


    .hd {
        box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.2);
    }

    .hideee {
        display: none;

    }

    .myDIV:hover+.hideee {
        display: block;
        color: red;
        transition-duration: 0.8s;

    }

    .noulne {
        text-decoration: none;
    }



    /* Add styling to the card-container */
    .card-container {
        width: 100%;
    }

    .card-img-top:hover {
        position: relative;
    }

    /* header */




    .logo {
        width: 150px;
        float: right;
    }



    .icon {
        margin-right: 10px;
        font-size: 18px;
        width: 24px;
        text-align: center;
        color: #fff;
        /* Change text color to white */

    }

    .apple {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    /* ============================================ */
</style>
<!-- Navbar start -->
<div class="container-fluid sticky-top px-0">
            <div class="container-fluid">
                <div class="container px-0">
                    <nav class="navbar navbar-light navbar-expand-xl" id="navBar">
                        <a href="index.html" class="navbar-brand">
                            <h4 class="text-primary display-6 fw-bold mb-0"><img src="img/logo.png" style="background-color: transparent; width: 160px;" /></h4>
                        </a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-primary"></span>
                        </button>
                        <div class="collapse navbar-collapse py-3" id="navbarCollapse">
                            <div class="navbar-nav mx-auto border-top">
                                <a href="index.php" class="nav-item nav-link">Home</a>
                                <a href="selectmat.php" class="nav-item nav-link">Profile</a>
                                <a href="male.php" class="nav-item nav-link active">Male</a>
                                <a href="female.php" class="nav-item nav-link">Female</a>
                                <a href="reqselect.php" class="nav-item nav-link">Request</a>
                             
                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                <a href="changepass.php" class="btn btn-secondary btn-secondary-outline-0 py-2 px-4 ms-4">change password</a>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                <a href="adlogin.php?abc" class="btn btn-primary btn-secondary-outline-0 py-2 px-4 ms-4">logout</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->

<body style="background-image: url('img/Untitled design.png'); min-height: 700px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
  <!-- Top Navbar -->


  <!-- Main Content Container -->
  
  <div id="main">
      <div class="apple mt-5">
      <div class="hi col-md-9">
    <!-- Your content goes here -->

  <?php
// Update the query to select male profiles
$res = $connect->prepare("SELECT * FROM wedding WHERE gender = 'male'");
$res->execute();

$count = 0;
echo '<div class="row">'; // Start the row

while ($row = $res->fetch()) {
    echo '<div class="col-md-6">'; // Start a column for each profile

    echo '<div class="card mt-5" style="border-radius: 25px;">';
    echo '<div class="d-flex">';
    echo '<div class="col-md-6">';
    echo '<a class="myDIV" href="maleview.php?idxyz=' . $row['id'] . '">';

    if($row['picture']!="") 
    {
     
    echo '<img class="card-img-top my-3 mx-3" src="../img/' . $row['picture'] . '" alt="Card image cap" width="90px" height="130px" style="border-radius: 50%;"></a>';
     
    } 
    else 
    {
      ?>
     <div class="d-flex justify-content-center align-items-center">
      <img  class="rounded  mx-2" src="img/avatar.png" width="130px" alt="Empty" height="130px"></div>
  
  
      <?php
    }
  

    echo '<span class="hideee mx-3">Click This image to see your Profile</span>';
    echo '</div>';

    echo '<div class="card-body col-md-6">';
    echo '<h5 class="card-title mt-2 mx-3 fs-6"><b> Name</b><span class="text-primary display-6 fs-5">' . $row['name'] . '</span></h5>';
    echo '<h5 class="card-title mx-3 fs-6"><b> Gender</b><span class="text-primary display-6 fs-5">' . $row['gender'] . '</span></h5>';
    echo '<h5 class="card-title mx-3 fs-6"><b> DOB</b><span class="text-primary display-6 fs-5">' . $row['dob'] . '</span></h5>';
    echo '<form method="POST" action="selectmat.php">';
    echo '<input type="hidden" name="profile_id" value="' . $row['id'] . '">';
    echo '<button type="submit" class="btn btn-danger mx-3 delete-button">Delete</button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>'; // Close the column

    $count++;

    // Check if two profiles have been displayed, then close the row
    if ($count % 2 == 0) {
        echo '</div>'; // Close the row
        echo '<div class="row">'; // Start a new row
    }
}

// Close the last row if there are odd profiles
if ($count % 2 != 0) {
    echo '</div>';
}
?>

<script>
$(document).ready(function () {
    $('.delete-button').click(function () {
        var profileId = $(this).siblings('input[name="profile_id"]').val();

        if (confirm("Are you sure you want to delete this profile?")) {
            $.ajax({
                type: 'POST',
                url: 'delete_profile_ajax.php',
                data: {
                    profile_id: profileId
                },
                success: function (response) {
                    if (response === 'success') {
                        alert('Profile deleted successfully.');
                        location.reload(); // Refresh the page or update the UI
                    } else {
                        alert('Error: Unable to delete the profile.');
                    }
                },
                error: function () {
                    alert('An error occurred while processing the request.');
                }
            });
        }
    });
});
</script>

<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the profile_id from the AJAX request
    $profile_id = $_POST["profile_id"];

    // Prepare and execute a DELETE query to remove the record from the "wedding" table
    $deleteQuery = $connect->prepare("DELETE FROM wedding WHERE id = :profile_id");

    // Bind the parameter
    $deleteQuery->bindParam(':profile_id', $profile_id, PDO::PARAM_INT);

    // Execute the query
    if ($deleteQuery->execute()) {
        // echo 'success';
    } else {
        echo 'error';
    }
}
// } else {
//     echo 'error';
// }
?>


</div>
</div>
</div>

 <!-- Copyright Start -->
 <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Tek matrimony</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom" href="#">Mindtek</a> Distributed By <a href="#">Seasence.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-primary-outline-0 btn-md-square back-to-top"><i class="fa fa-arrow-up"></i></a>  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>