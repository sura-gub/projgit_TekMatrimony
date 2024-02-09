<?php
session_start();
if(!isset($_SESSION['dev'])) {
    header("Location: login.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>changepass</title>
   <!-- Icon Font Stylesheet -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
  <!-- base:css -->
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  
  
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style5.css" rel="stylesheet">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />

  <script src="js/jquery-1.8.2.min.js" ></script>
</head>
<style>
.btnnn{
  border: none;
  padding: 10px;
  background-color: transparent;
  font-size: 20px;
  border-radius: 10px;
  transition-duration: 0.6s;

}
.btnnn:hover{
  background-color: #C3C4C9;
  box-shadow: 1px 2px 10px 5px rgba(20,20,20,0.1);
}
.btn:hover{
  background-color: #C3C4C9;
  box-shadow: 1px 2px 10px 5px rgba(20,20,20,0.1);
}
.btnnn2 {
    border: none;
    padding: 10px;
    background-color: transparent;
    font-size: 20px;
    border-radius: 10px;
    transition-duration: 0.6s;
  }

  .btnnn2:hover {
    background-color: #C3C4C9;
    box-shadow: 1px 2px 10px 5px rgba(20, 20, 20, 0.1);
  }
.brgr{
    display:none;
  }
  .remov{
    display:none;
  }
  
@media screen and (max-width:500px) {

  .brgr{
  display:block;
}
.card{
    width:100%;
   justify-content:end;
}
.hd{
  width:100%

}
.btnnn {
    border: none;
    background-color: transparent;
    font-size: 10px;
    border-radius: 5px;
    transition-duration: 0.6s;
    display:none;
  }
.btnnn2 {
    border: none;
    background-color: transparent;
    font-size: 10px;
    border-radius: 5px;
    transition-duration: 0.6s;
    display:none;
  }
}
@media screen and (min-width:500PX) {

.btnnn2 {
  border: none;
  background-color: transparent;
  font-size: 10px;
  border-radius: 5px;
  transition-duration: 0.6s;
  display:none;
}
}
.card{
  background-image:url(img/logback1.jpg);
  color:white;
font-family:calibri;
}
.main-panel{
  width: 1100px;
  align: centre;
}
.custom-width-input {
            width: 100%;
        }

        .container {
            margin-top: 60px;
          
        }
        body{
            background-size: cover;
            background-position: center;
        }
        .card .card-title {
    color: #004aad;
    padding-top:7px;
    margin-top: -1.5rem;
    margin-bottom: 1.5rem;
    text-transform: capitalize;
    }
.bgl{
  background-color:white;
  /* border-bottom: 1px solid  #cfe0f7; */
}
  </style>
  <script>
  function men(){

document.getElementById("nvbtn").style.display="block";
document.getElementById("nvbtn1").style.display="block";
document.getElementById("rmv").style.display="block";
document.getElementById("mnu").style.display="none";
  }
  function rem(){
document.getElementById("nvbtn").style.display="none";
document.getElementById("nvbtn1").style.display="none";
document.getElementById("rmv").style.display="none";
document.getElementById("mnu").style.display="block";
  }
  </script>





<script>
                      function xyz()
                      {
                        var oldpassword=document.getElementById("oldpassword").value;
                        var newpassword=document.getElementById("newpassword").value;
                        var confirmpassword=document.getElementById("confirmpwd").value;
                        $.ajax({
                          url:"inspass.php",
                          data:{oldpassword : oldpassword,newpasswords : newpassword,confirmpwd : confirmpassword,},
                              type:'POST',
                              success:function(result)
                              {
                                alert(result);
                                
                                if(result == "successful")
                                {
                                  window.location.href="indexdb.php";
                                  document.getElementById("successmsg").innerHTML="Password change successfully";
                                }
                                else
                                {
                                  
                                }
                              }
                        });
                      }
                      </script>

 <!-- Top Navbar-->
 <body style="background-image: url('img/Untitled design.png'); min-height: 750px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100 container-fluid ">
                      

 <div class="container-fluid bgl navbar navbar-light navbar-expand-xl">
    <div class="row  hd col-lg-12 col-md-12 col-sm-12 col-xl-12">
      <div class="nav-scroller">
        <img src="img/logo.png" alt="logobg"width="160px" style="margin-left:50px; margin-top:10px">
        <nav class="nav float-end" style="">
          <a href="index.php"> <button class="m-3 btn btn-secondary"><img src="img/left-arrows.png" width="20px" alt="">
          Back</button> </a>
          <a href="adlogin.php"><button class="m-3 btn btn-primary"><img src="img/turn-off.png" width="20px"
                alt="">Logout</button></a>
                <!-- <div><button class="btn brgr" onclick="men()" id="mnu"><img src="img/menu.png" width="20px"></button>
                <button class="btn remov"  onclick="rem()" id="rmv"><img src="img/remove.png" width="20px"></button></div>
        </nav>
        <div class="nav">
        <a href="indexdb.php"  style="text-decoration:none;"> <button id="nvbtn" class="m-3 btnnn2"><img src="img/left-arrows.png" width="20px" alt="">
          Back</button> </a>
          <a href="logout.php"  style="text-decoration:none;"><button id="nvbtn1" class="m-3 btnnn2"><img src="img/turn-off.png" width="20px"
                alt="">Logout</button></a></div> -->
      </div>
    </div>
  </div>
  
    <!-- partial -->
    <!-- <div style="background-image: url('finimg/adsree.jpeg'); min-height: 750px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100 container-fluid page-body-wrapper d-flex justify-content-center align-items-center"> -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-sm-12 col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center c fs-2">Change Password</h2>
                        <form class="forms-sample">

                            <div class="form-group">
                                <label for="exampleInputUsername1" class="fs-5 text-dark">Old Password</label>
                                <input type="password" class="form-control custom-width-input" placeholder="Old pwd" id="oldpassword">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1" class="fs-5 text-dark">New Password</label>
                                <input type="password" class="form-control" placeholder="New pwd" id="newpassword">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputConfirmPassword1" class="fs-5 text-dark">Confirm New Password</label>
                                <input type="password" class="form-control" placeholder="confirm pwd" id="confirmpwd">
                            </div>

                            <div class="d-flex justify-content-center">
                                <button type="button" class="btn btn-primary mr-2" onclick="xyz()">Change</button>
                                <a class="btn btn-light" href="changepass.php">Cancel</a>
                            </div>

                            <div class="text-center mt-3">
                                <span style="color:green" id="successmsg"></span>
                                <span style="color:red" id="errormsg"></span>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<!-- page-body-wrapper ends -->
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
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
