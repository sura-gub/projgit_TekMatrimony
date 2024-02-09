<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pro3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        /* Add your custom styles here */
        #caste, #sub, #goth, #suddha {
            background-color: transparent;
            border: none;
        }
        body {
            background-image: linear-gradient(rgba(255, 192, 203, 0.3), rgba(255, 192, 203, 0.3)),
            url('img/25th.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        .logo {
            margin: 0 auto;
            display: block;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php require(__DIR__ . '/matbase.php'); ?>
    
    <div class="container">
    <div class="row">
            <div class="col-lg-12 mx-5">
            <div class="text-start mt-5">
                    <img src="img/tekmat.png" width="200px" height="90px" alt="Logo">
                
           
                    <h5  class="text-end mb-0" style="margin-right:250px">Great! You have completed <span class="fs-3">20%</span></h5>
             
                </div>
            </div>
        </div>
        <div class="container mt-3" style="border-radius: 20px; background-color: rgba(255, 192, 203, 0.5); max-width: 1050px; padding: 20px;">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h3 class="text-center">Religion details can help us find the right match.</h3>
                    <form>
                    <div class="mb-3">
                            <label for="caste" class="form-label d-flex">
                                <h5 class="w-25 mt-3">Caste :</h5>
                           
                            <select id="caste" class="form-select border-bottom border-dark">
                                <option selected>Choose...</option>
                                <option>BC</option>
                                <option>OC</option>
                                <option>MBC</option>
                                <option>SC</option>
                            </select>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <h5 class="mt-3" id="xyz">Willingness :</h5>
                            </div>
                            <div class="col-9 mt-3">
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sj" id="Yes" value="Yes" autocomplete="off">
                                    <label class="form-check-label" for="Yes">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" name="sj" id="No" value="No" autocomplete="off">
                                    <label class="form-check-label" for="No">No</label>
                                </div>
                                <b>Willing to marry from other communities also</b>
                            </div>
                        </div>
                        <div class="mb-3">
                        <label for="datalist" class="form-label d-flex">
                                <h5 class="w-25 mt-3">SubCaste :</h5>
                           
                                <input list="sub" id="sub" class="form-control border-bottom border-dark" placeholder="Enter the SubCaste...">
    <datalist id="sub">
        <option value="Choose..."></option>
        <option value="Christian"></option>
        <option value="Hindu"></option>
        <option value="Islam"></option>
    </datalist>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail3" class="form-label d-flex">
                                <h5 class="w-25 mt-3">Gothram :</h5>
                           
                            
                            <select class="form-select border-bottom border-dark" id="goth">
                  <option selected disabled value="">Choose...</option>
                  <option value="Dont Know">Don't Know</option>
                  <option value="Not Interested">Not Interested</option>
                  <option value="Kaushika">Kaushika</option>
                  <option value="Audala">Audala</option>
                  <option value="Angirasa">Angirasa</option>
                  <option value="Atri">Atri</option>
                  <option value="Aatreya">Aatreya</option>
                  <option value="Bharadwaj">Bharadwaj</option>
                  <option value="Bhargava">Bhargava</option>
                  <option value="Bhrigu">Bhrigu</option>
                  <option value="Brihadbala">Brihadbala</option>
                  <option value="Chandratre">Chandratre</option>
                  <option value="Dhananjaya">Dhananjaya</option>
                  <option value="Garg">Garg</option>
                  <option value="Gautam">Gautam</option>
                  <option value="Harinama">Harinama</option>
                  <option value="Haritasya">Haritasya</option>
                  <option value="Kadam">Kadam</option>
                  <option value="Kaundinya">Kaundinya</option>
                  <option value="Manu">Manu</option>
                  <option value="Marichi">Marichi</option>
                  <option value="Meena">Meena</option>
                  <option value="Parashar">Parashar</option>
                  <option value="Sandilya">Sandilya</option>
                  <option value="Shiva(Shiv-adi)">Shiva(Shiv-adi)</option>
                  <option value="Siwal">Siwal</option>
                  <option value="Upamanyu">Upamanyu</option>
                  <option value="Upreti">Upreti</option>
                  <option value="Vashista">Vashista</option>
                  <option value="Vishnu">Vishnu</option>
                  <option value="Vishvamitra">Vishvamitra</option>
                  <option value="Yadav">Yadav</option>
                  <option value="Jamadagni">Jamadagni</option>
                  <option value="Kashyapa">Kashyapa</option>
                  <!-- <option value="no" style="color: rgb(102, 102, 102);">Show more gothras</option> -->
                </select>
                </label>
                        </div>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-3">
                                    <h5 class="mt-3" id="suddha">Suddha Jadhagam :</h5>
                                </div>
                                <div class="col-9 mt-3">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="sjd" id="sjdYes" value="Yes" autocomplete="off">
                                        <label class="form-check-label" for="sjdYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="sjd" id="sjdNo" value="No" autocomplete="off">
                                        <label class="form-check-label" for="sjdNo">No</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="sjd" id="sjdDontKnow" value="Dont-know" autocomplete="off">
                                        <label class="form-check-label" for="sjdDontKnow">Don't know</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <center>
                                <button type="button" onclick="con()" class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function con() {
                var caste2 = document.getElementById("caste").value;
                var sub2 = document.getElementById("sub").value;
                var goth2 = document.getElementById("goth").value;

                var Yes = document.getElementById("Yes");
                var No = document.getElementById("No");
                var xyz = "";
                if (Yes.checked) {
                    xyz = Yes.value;
                } else if (No.checked) {
                    xyz = No.value;
                }

                var sjdYes = document.getElementById("sjdYes");
                var sjdNo = document.getElementById("sjdNo");
                var sjdDontKnow = document.getElementById("sjdDontKnow");

                var Suddha = "";
                if (sjdYes.checked) {
                    Suddha = sjdYes.value;
                } else if (sjdNo.checked) {
                    Suddha = sjdNo.value;
                } else if (sjdDontKnow.checked) {
                    Suddha = sjdDontKnow.value;
                }

                // Check if any of the essential fields is empty
                if (caste2 === '' || sub2 === '' || goth2 === '' || Suddha === '' || xyz === '') {
                    alert("Please fill in all essential fields");
                    return; // Exit the function if any essential field is empty
                }

                $.ajax({
                    url: "pro3insert.php",
                    data: {
                        cocaste2: caste2,
                        cosub2: sub2,
                        cogoth2: goth2,
                        cosuddha2: Suddha,
                        coxyz2: xyz
                    },
                    type: "POST",
                    success: function (submit) {
                        if (submit === "success") {
                            alert("Data updated successfully. Proceed to the next page!");
                            window.location.href = "regis4.php";
                        } else {
                            alert("Data update failed"); // You can provide an appropriate error message
                        }
                    },
                    error: function () {
                        alert("An error occurred while updating the data");
                    }
                });
            }
        </script>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
