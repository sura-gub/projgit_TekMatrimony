<?php 
session_start();
require(__DIR__ . '/../matbase.php');
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Request</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Open+Sans:wght@400;500;600&family=Petit+Formal+Script&display=swap" rel="stylesheet">  -->

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
     <!-- Customized Bootstrap Stylesheet -->
     <link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="css/style5.css" rel="stylesheet">
    <style>
  
/* ================================================ */
.card {
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.3);
    padding: 0px;
  transition: transform 0.3s, box-shadow 0.3s;
  }
  .card:hover {
  transform: scale(1.05);
  box-shadow: 5px 10px 20px rgba(20, 20, 20, 0.5); 
}

.card:hover .card-title {
  color: Black; 
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
 /* .content {
    margin-left: 200px;
    padding: 20px;
  } */

  /* .card-container {
    width: 100%;
  } */
  /* .card-img-top:hover {
    position: relative;
} */
table {
  border-collapse: collapse;
  width: 100%;
}

table th {
  color: black;
  text-align: left;
  font-size:35px;
}


table th:nth-child(2) {
    /* padding: 0 20px; Add padding to separate the columns */
  }
/* Style the table data cells */
table td {
  /* padding: 30px; */
}

.profile-details {
  /* display: flex; */
  align-items: center;

}

.profile-image {
  /* flex: 0 0 150px; */
  /* padding: 20px; */
  

}

.profile-image img {
  width: 150px;
  height: 150px;
  border-radius: 20px;
  
}

.profile-info {
  flex: 1;
  padding: 0px;
  width: 150px;
}


.profile-info h5 {
  font-size: 18px;
  margin: 0;
  
}

.profile-info p {
  font-size: 16px;
  margin: 0px 5px;
  
}

.hideee {
  display: none;
}

.myDIV {
  text-decoration: none;
  color: #333;
  display: block;
  position: relative;
}

.myDIV:hover .hideee {
  display: block;
  color: red;
  transition-duration: 0.8s;
}
.apple {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin-top:70px;
        /* Ensure it spans the full viewport height */
    }
th.large-arrow {
        /* Center the content vertically and horizontally */
        display: flex;
        align-items: left;
        justify-content: left;
        margin-right: 50px;
    }
</style>
</head>
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
                                <a href="male.php" class="nav-item nav-link">Male</a>
                                <a href="female.php" class="nav-item nav-link">Female</a>
                                <a href="reqselect.php" class="nav-item nav-link active">Request</a>
                                
                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                <a href="changepass.php" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">change password</a>
                            </div>
                            <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                                <a href="adlogin.php?abc" class="btn btn-primary btn-primary-outline-0 py-2 px-4 ms-4">logout</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
<body style="background-image: url('img/Untitled design.png'); min-height: 700px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">

<?php
    if(!isset($_SESSION['dev']))
    {
      ?>
      <script>
        window.location.href = "adlogin.php";
      </script>
      <?php
    }
    ?>

<!-- Main Content -->
<div id="main" class="apple">
<div class="col-md-10"  >
<table>
<tr>
  <th>Request From</th>
  <th class="large-arrow">&#10148;</th>
  <th>Request To</th>
</tr>
<!-- OR -->


<?php
$res = $connect->prepare("SELECT r.*, w1.picture AS request_from_picture, w1.name AS request_from_name, w1.gender AS request_from_gender, w1.dob AS request_from_dob, w1.mobile AS request_from_mobile, w2.picture AS request_to_picture, w2.name AS request_to_name, w2.gender AS request_to_gender, w2.dob AS request_to_dob, w2.mobile AS request_to_mobile
                       FROM friendrequest r
                       LEFT JOIN wedding w1 ON r.request_from = w1.email
                       LEFT JOIN wedding w2 ON r.request_to = w2.email");
$res->execute();
// $sl = 0;
while ($row = $res->fetch()) {
  // $sl++;
?>
<tr>
  <!-- <td><?php print $sl; ?></td> -->
  <td>
<div class="d-flex profile-details">
  <div class="profile-image">
  <a href="requestview.php?idxyz=<?php echo $row['id']; ?>&email=<?php echo $row['request_from']; ?>">
              <?php
              if($row['request_from_picture']!="") 
              {
               
              echo '<img src="../img/' . $row['request_from_picture']. '" width="130px" height="130px" class="rounded-circle" alt="Profile Picture"><br>';
               
              } 
              else 
              {
                ?>
               <div class="d-flex justify-content-center align-items-center">
                <img  class="rounded  mx-2" src="img/avatar.png" width="130px" alt="Empty" height="130px"></div>
            
            
                <?php
              }
            
?>
          <span class="hideee mx-3">Click This image to see your Profile</span>
      </a>
  </div>
  <div class="profile-info">
      <h5><?php echo $row['request_from_name']; ?></h5>
      <h6>Gender: <?php echo $row['request_from_gender']; ?></h6>
      <h6>DOB: <?php echo $row['request_from_dob']; ?></h6>
      <h6>Mobile: <?php echo $row['request_from_mobile']; ?></h6>
  </div>
</div>
</td>
<td><div class="large-arrow">&#10148;</div></td>
<td>
<div class="d-flex profile-details">
  <div class="profile-image">
  <a href="requestview.php?idxyz=<?php echo $row['id']; ?>&email=<?php echo $row['request_to']; ?>">
  <?php
              if($row['request_to_picture']!="") 
              {
               
              echo '<img src="../img/' . $row['request_to_picture']. '" width="130px" height="130px" class="rounded-circle" alt="Profile Picture"><br>';
               
              } 
              else 
              {
                ?>
               <div class="d-flex justify-content-center align-items-center">
                <img  class="rounded  mx-2" src="img/avatar.png" width="130px" alt="Empty" height="130px"></div>
            
            
                <?php
              }
            
?>
          <span class="hideee mx-3">Click This image to see your Profile</span>
      </a>
  </div>
  <div class="profile-info">
      <h5><?php echo $row['request_to_name']; ?></h5>
      <h6>Gender: <?php echo $row['request_to_gender']; ?></h6>
      <h6>DOB: <?php echo $row['request_to_dob']; ?></h6>
      <h6>Mobile: <?php echo $row['request_to_mobile']; ?></h6>
  </div>
</div>
</td>

</tr>
<?php
}
?>
</table>

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

</body>
</html>
