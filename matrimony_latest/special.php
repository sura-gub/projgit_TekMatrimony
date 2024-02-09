<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title>Special offer</title>
</head>
<style>
    /* Styles for the modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
}

/* Styles for the modal content */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  max-width: 400px;
}

/* Styles for the close button */
.close {
  position: absolute;
  right: 10px;
  top: 10px;
  color: #888;
  font-size: 20px;
  cursor: pointer;
}

    </style>
<link rel="stylesheet" href="css/style-maha2w.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=shadow-multiple">

<body style="background-image: url('img/paybg1.jpg'); min-height: 750px; background-size: cover; background-repeat: no-repeat; background-position: center;" class="w-100">
    <div class="header card container-fluid">
    <div>
    <img src="../matrimony/img/tekmat.png" width="200px" height="90px" alt="Logo">
<a href="#default" class="logo">upgrade now</a>     <button type="button" class="btn btn-secondary float-end" data-bs-toggle="modal" data-bs-target="#skipModal">Skip <img src="img/icons8-fast-forward-30.png" width="20px" alt=""></button>
</div>
    </div>


    <br>
    <center>
    <section>
    <div>
        <h2><b> <img src="img/google-pay.png" width="40px" alt="">&nbsp;&nbsp;&nbsp;<img src="img/paytm.png" width="40px" alt="">&nbsp;&nbsp;&nbsp;<img src="img/amazon-pay.png" width="40px" alt="">&nbsp;&nbsp;&nbsp;Pay now to contact matches </b</h2>
    </div><br>
    </section>
    <section>
    <div id="aaa">
        <p><span style="color: orange;">&#x2713;</span>Send <b>unlimited messages</b> & <b> chat </b> view <b> 40 verified mobile numbers </b></p>
        <p><span style="color: orange;">&#x2713;</span>check <b>compatibility </b> with matches by viewing <b> unlimited horoscope </b></p>
        <p class="text-muted">&#10006; <del> View and contact ID verified matches with photos from exclusive Prime section</del></p>
        <p class="text-muted">&#10006; <del> Priority customer service helpline</del></p>
    </div>
    </section><br>
    <section>
        <div class="container">
            <div class="row">
            <div class="col-lg-4">
  <div class="card card1 border-silver" style="width: 18rem;">
    <div class="card-header">
      <b>silver</b>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">1 month</li>
      <li class="list-group-item text-success"><b>SAVE 8%</b></li>
      <li class="list-group-item text-muted">
        <del>Rs.699</del> <b> Pay Now <br><a href="javascript:void(0);" onclick="openModal()" type="button" class="btn btn-warning">Rs.299</a></b>
      </li>
    </ul>
  </div>
</div>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closePopup" onclick="closeModal()">&times;</span>
    <p>This is your popup content. You can customize it as needed.</p>
  </div>
</div>

<script>
  // Get the modal element
  var modal = document.getElementById("myModal");

  // Function to open the modal
  function openModal() {
    modal.style.display = "block";
  }

  // Function to close the modal
  function closeModal() {
    modal.style.display = "none";
  }
</script>


            <div class="col-lg-4">
            <div class="card card1 border-warning" style="width: 18rem;">
                <div class="card-header">
                    <b>GOLD</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">2 months</li>
                  <li class="list-group-item text-success"><b>SAVE 20%</b></li>
                  <li class="list-group-item text-muted"><del>Rs.999</del><b> Pay Now <br><a href="https://pay.google.com/about/"><button type="button" class="btn btn-warning">Rs.599</button></a></b></li>
                </ul>
              </div>
            </div>

            <div class="col-lg-4">
              <div class="card card1" style="width: 18rem;">
                <div class="card-header bg-primary">
                    <b>BEST SELLING</b>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Platinum</li>
                  <li class="list-group-item">3 Months</li>
                  <li class="list-group-item text-success"><b>SAVE 47%</b></li>
                  <li class="list-group-item text-muted"><del>Rs.2999</del><b> Pay Now <br><a href="https://pay.google.com/about/"><button type="button" class="btn btn-warning">Rs.1499</button></a></b></li>
                </ul>
              </div>
            </div>
            
        </div>
       
        
    <!-- Skip Button -->
   
    <!-- Modal -->
    <div class="modal fade" id="skipModal" tabindex="-1" aria-labelledby="skipModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="skipModalLabel">Skip Confirmation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to skip?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <a href="admin8.php" class="btn btn-info">Skip</a>
                </div>
            </div>
        </div>
  
        </section>
        
        </center>
        <h6 class="ccc"><b>Offer Valid only today!</b></h6><br>
</body>

</html>