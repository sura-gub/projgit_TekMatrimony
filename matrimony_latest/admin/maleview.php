<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
   .card {
    box-shadow: 1px 2px 10px 5px rgba(20,20,20,0.2);
}
  .hd{
  box-shadow: 1px 2px 10px 5px rgba(20,20,20,0.1);
}
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
</style>
<body style="background: linear-gradient(to bottom, #cccccc, #ffffff);">  <?php
  require(__DIR__ . '/../matbase.php');


  // session_start();



  if (isset($_GET['idxyz'])) {
    $qry = "select * from wedding where id='$_GET[idxyz]'";
  } else {
    $qry = "select * from wedding where email='$_SESSION[loger]'";
  }
  $eee = $connect->prepare($qry);
  $eee->execute();
  $sss = $eee->fetchAll();
  foreach ($sss as $sss2)

    // $logpersonemail = $_SESSION['loger'];

  ?>
  <div class="container-fluid">
    <div class="row bg-danger-subtle hd">
      <div class="mt-3">
      
        <div class="nav-scroller">
        <img src="../../matrimony/img/tekmat.png" style="background-color: transparent; width:150px";/>
          <nav class="nav float-end" style="font-size: 12px">
          <a href="male.php"> <button class="m-3 btnnn"><img src="img/left-arrows.png" width="20px" alt=""> Back</button> </a>
          <!-- <a href="#"><button class="m-3 btnnn"><img src="img/lock.png" width="20px" alt="">Change Password</button></a>

            <a href="index.php?xyz"><button class="m-3 btnnn"><img src="img/turn-off.png" width="20px" alt="">Logout</button></a> -->

          </nav>
        </div>
      </div>
    </div>

    <div class="text-center mt-4">
      <h1 class="display-4"><?php print $sss2['name']; ?>'s Profile</h1>
    </div>
    <div>

      <div class="row">
        <div class="col-md-4">
      

          <?php
          $res = $connect->prepare("SELECT * FROM `friendrequest` WHERE `request_to`='$sss2[email]'");
          $res->execute();
          while ($requestedProfile = $res->fetch()) {
            ?>

            <p><b> Status : </b>
              <?php print $requestedProfile['status'] ?>
            </p>

            <?php
          }
          ?>
          </div>


<div class="container">
          <div class="row">
          <div class="card col-lg-10 mx-3" style="width: 82rem; border-radius: 5px;">
          <div class="d-flex">
          <div class=" col-md-4">
        <?php
          if($sss2['picture']!="") 
              {
               
              echo '<img src="../img/' . $sss2['picture'] . '" width="230px" height="230px" class="my-5 mx-5 rounded-circle" alt="Profile Picture"><br>';
               
              } 
              else 
              {
                ?>
               <div class="d-flex justify-content-center align-items-center">
                <img  class="rounded my-4  mx-2" src="img/avatar.png" width="230px" alt="Empty" height="230px"></div>
            
            
                <?php
              }
              ?>
          </div>
          <div class="card-body  col-md-6">
          <h5 class="card-title mt-2"><b> Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><span class="text-primary"><?php print $sss2['name']; ?></span></h5><hr>
          <h5 class="card-title"><b> Gender &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="text-primary"><?php print $sss2['gender']; ?></span></h5><hr>
          <h5 class="card-title"><b> Date Of Birth &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="text-primary"><?php print $sss2['dob']; ?></span></h5><hr>
          <h5 class="card-title"><b> Mobile No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="text-primary"><?php print $sss2['mobile']; ?></span></h5><hr>
          <h5 class="card-title"><b>Email I'd &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="text-primary"><?php print $sss2['email']; ?></span></h5><hr>  
          <h5 class="card-title"><b>Occupation &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="text-primary"><?php print $sss2['occupation']; ?></span></h5><hr>
          <h5 class="card-title"><b>State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </b><span class="text-primary"><?php print $sss2['state']; ?></span></h5>
          
          </div>
          </div>
          </div>
          </div>
          </div>


        
        <!-- <div class="col-md-4">
          <img src="img/<?php print $sss2['picture']; ?>" width="200px" height="200px" class="rounded-circle " />
        </div>
        <div class="col-md-4">
          <p><b> Name : </b>
            <?php print $sss2['name']; ?>
          </p>
          <p><b> Gender : </b>
            <?php print $sss2['gender']; ?>
          </p>
          <p><b> Date Of Birth : </b>
            <?php print $sss2['dob']; ?>
          </p>
          <p><b> Mobile No : </b>
            <?php print $sss2['mobile']; ?>
          </p>
          <p><b>Email I'd : </b>
            <?php print $sss2['email']; ?>
          </p>
        </div> -->

        <div class="col-lg-12 grid-margin stretch-card"><br>
          <div class="card">
            <div class="card-body">
              <div class="container">
                <div>
                  <h2 class="text-center">See how well your profile matches his preference</h2>
                </div>
                <hr>
                <div class="row">

                  <div class="col-md-4">
                    <h3>About him/her</h3><br>
                    <p><b>Family Status : </b>
                      <?php print $sss2['famstatus']; ?><br>
                    </p>
                    <p><b>Family type : </b>
                      <?php print $sss2['famtype']; ?><br>
                    </p>
                    <p><b>Family value : </b>
                      <?php print $sss2['famvalue']; ?><br>
                    </p>
                    <p><b>Any Disability : </b>
                      <?php print $sss2['disability']; ?>
                    </p>
                  </div>


                  <br>

                  <div class="col-md-4">
                    <h3>His religious preferences</h3><br>
                    <table class="f">
                      <p><b>Religion : </b>
                        <?php print $sss2['religion']; ?>
                      </p>
                      <p><b>Caste : </b>
                        <?php print $sss2['caste']; ?>
                      </p>
                      <p><b>Subcaste : </b>
                        <?php print $sss2['subcaste']; ?>
                      </p>
                      <p><b>Suddhajadhagam : </b>
                        <?php print $sss2['suddha']; ?>
                      </p>

                    </table>
                  </div><br>

                  <div class="col-md-4">
                    <h3>His professional preferences</h3><br>
                    <table class="oo">
                      <p><b>Education : </b>
                        <?php print $sss2['education']; ?>
                      </p>
                      <p><b>employed in : </b>
                        <?php print $sss2['employed']; ?>
                      </p>
                      <p><b>Occupation : </b>
                        <?php print $sss2['occupation']; ?>
                      </p>
                      <p><b>Annual Income : </b>
                        <?php print $sss2['amount']; ?>
                      </p>

                    </table>
                  </div><br>
                  <div class="row">
                    <div class="col-md-4">
                      <h3>His location preferences</h3><br>
                      <table class="g">

                        <p><b>Residing state : </b>
                          <?php print $sss2['state']; ?>
                        </p>
                        <p><b>Work Location : </b>
                          <?php print $sss2['location']; ?>
                        </p>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <h3><i class="mdi mdi-tie"></i> His professional details</h3><br>
                      <p><b>Occupation : </b>
                        <?php print $sss2['occupation']; ?>
                      </p>
                      <p><b>Employed in : </b>
                        <?php print $sss2['employed']; ?>
                      </p>
                      <p><b>Work Location : </b>
                        <?php print $sss2['location']; ?>
                      </p>
                      <p><b>Annual Income : </b>
                        <?php print $sss2['amount']; ?>
                      </p>
                    </div>

                    <div class="col-md-4">
                      <h3>His basic preferences</h3><br>


                      <p><b>Marrital status : </b>
                        <?php print $sss2['marital']; ?>
                      </p>
                      <p><b>Mother tongue : </b>
                        <?php print $sss2['mother']; ?>
                      </p>
                      <p><b>Physical status : </b>
                        <?php print $sss2['disability']; ?>
                      </p>


                    </div>
                  </div>
                  <script>

                    let requestSent = false;

                    function req(logem, reqprsnid) {
                      if (!requestSent) {
                        $.ajax({
                          url: "view10insert.php",
                          data: { em: logem, reid: reqprsnid },
                          type: "POST",
                          success: function (submit) {
                            alert(submit);
                            window.location.href = "admin8.php";
                          },
                          error: function () {
                            alert("Error occurred during the request.");
                          }
                        });
                        requestSent = true;
                      }
                    }
                  </script>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

</html>