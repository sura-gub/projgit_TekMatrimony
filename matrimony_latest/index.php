<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Matrimony</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<style>
    .your {
        margin-top: 100px;
    }

    .pic {
        text-align: center;
    }

    .navbar-nav {
        flex-direction: column;

    }

    .navs-link {
        display: block;
        padding-left: 15px;
        padding-right: 15px;
        text-decoration: none;
        background: 0 0;
        border: 0;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
    }

    .bgcolor {
        color: Black;
    }

    .hdclr {
        background-color: rgb(255, 128, 128,0.3);
    }

    .hdtxtclr {
        color: white;
        transition: background-color 0.5s ease;

    }

    .hdtxtclr:hover {
        color: #0000ff;

    }

    .button {
        margin: 10%;
        text-align: center;
    }
    @media screen and (max-width:750px){
        .bgcolor {
     display:none;
    }

        
    }
</style>

<script>
    let button = document.queryselector("mnu");
    link = document.queryselector("txtt");

    button.addEventListener("click", () => {
        link.classlist.toggle("display");
    })

</script>

<script>
    function men() {

        document.getElementById("txtt").style.display = "block";
        document.getElementById("hdclr").style.height = "100px";
        document.getElementById("hdi").style.opacity = "0";
        document.getElementById("hdi1").style.opacity = "0";
        document.getElementById("rmv").style.display = "block";
        document.getElementById("mnu").style.display = "none";
    }
    function rem() {

        document.getElementById("txtt").style.display = "none";
        document.getElementById("hdi").style.opacity = "1";
        document.getElementById("hdi1").style.opacity = "1";
        document.getElementById("rmv").style.display = "none";
        document.getElementById("mnu").style.display = "block";
    }  </script>

<body>

    <?php require(__DIR__ . '/matbase.php');


    if (isset($_GET['xyz'])) {
        session_destroy();
    }
    ?>


    <div style="background-image:linear-gradient(rgb(255,192,203,0.3)100%,rgb(255,192,203,0.3)100%), url('img/bckd3.jpg'); min-height: 800px; background-size: 100% 100%; background-repeat: no-repeat; background-position: center;"
        class="w-100">


        <div class="container-fluid">
            <div class="pic">
                <div class="row">
                    <div class="col-md-7 mt-5 ms-3 d-flex">
                            <div class="ms-3 mb-1 d-flex ">
        <img src="img/tekmat.png" style="background-color: transparent; width: 225px;" />	</div>

                    </div>

                        <div class="tt col-md-4 sm-3 lg-4 offset-6" style="margin-top:0px; ">
                          
                                        <strong class="bgcolor">You can see the matching profiles after Login</strong>
                                 
                        </div>
 

                    <div class="col-md-2">
                        <!-- Login Popup Button -->
                        <button type="button" class="btn btn-primary" style="margin-top:0px; " data-bs-toggle="modal"
                            data-bs-target="#loginModal" id="loginButton">
                            Login
                        </button>

                 
					</div>
                </div>
            </div>

            <div class="my-5">
                <div class="your ms-5">
                    <h2 class="bgcolor">Your search for the perfect match here!</h4>
                </div>
                <div class="mt-1 ms-5">
                    <h5 class="bgcolor display-7 fs-4 mt-3">#BeChoosy with India's biggest matrimony service</h5>
                </div>
            </div>
            <div class="row mt-3 ms-5">
                <div class="row g-2">
                    <div class="col-md mb-3">
                        <div class="form-floating">
                            <select class="form-select bg-secondary-subtle" id="pro">
                                <option selected>Matrimony Profiles For</option>
                                <option value="Myself">Myself</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Son">Son</option>
                                <option value="Friend">Friend</option>
                                <option value="Relatives">Relatives</option>
                            </select>
                            <label for="floatingSelectGrid"><b>Select Profiles</b></label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control bg-secondary-subtle" id="na"
                                placeholder="Enter Name">
                            <label for="floatingInputGrid"><b>Name</b></label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select bg-secondary-subtle" id="gen">
                                <option value="Enter Gender">Enter Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <label for="floatingSelectGrid"><b>Gender</b></label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control bg-secondary-subtle" id="mob"
                                placeholder="+91 Enter mob.no">
                            <label for="floatingInputGrid"><b>Mobile Number</b></label>
                        </div>
                    </div>
                    <div class="col-md">
                        <button type="button" onclick="regis()" class="btn btn-primary btn-lg px-4 mt-1">Register
                            Free</button>
                    </div>
                    <div id="message"></div>
                </div>
            </div>
            <div class="col-md-4 fs-6" style="white-space: nowrap; margin-left:60px;">
                <p class="bgcolor">By clicking register free, I agree to the <span class="text-primary">T&C</span> and
                    <span class="text-primary">Privacy Policy</span>.</p>
            </div>

        </div>
    </div>
    <script>
        document.getElementById("loginButton").addEventListener("click", function () {
            // Redirect to the desired page when the button is clicked
            window.location.href = "login.php"; // Replace "other-page.php" with the actual URL you want to navigate to
        });
    </script>

    <script>
        function regis() {
            var profile = document.getElementById("pro").value;
            var name = document.getElementById("na").value;
            var gender = document.getElementById("gen").value;
            var mobile = document.getElementById("mob").value;



            sessionStorage.setItem("profile", profile);
            sessionStorage.setItem("mobile", mobile);

            // Check if any of the fields are empty
            if (profile === "" || name === "" || gender === "" || mobile === "") {
                var messageDiv = document.getElementById("message");
                messageDiv.innerHTML = "Please fill in all the fields";
                messageDiv.style.color = "red";
                return;
            }

            if (mobile.length !== 10) {
                var messageDiv = document.getElementById("message");
                messageDiv.innerHTML = "Enter your valid mobile number";
                messageDiv.style.color = "red";
                return;
            }

            // If all fields are filled, proceed with the AJAX request
          

    if (mobile.length === 10 && /^[6789]\d{9}$/.test(mobile)) {
        $.ajax({
            url: "matri1insert.php",
            data: {
                profile2: profile,
                name2: name,
                gender2: gender,
                mobile2: mobile
            },
            type: "POST",
            success: function (submit) {
                var messageDiv = document.getElementById("message");
                if (submit === "success") {
                    messageDiv.innerHTML = "Submitted successfully";
                    messageDiv.style.color = "green";
                    window.location.href = "profile2.php";
                } else {
                    messageDiv.innerHTML = "Submission failed"; // You can provide an appropriate error message
                    messageDiv.style.color = "red";
                }
            },
            error: function () {
                var messageDiv = document.getElementById("message");
                messageDiv.innerHTML = "An error occurred while submitting the data";
                messageDiv.style.color = "red";
            }
        });
    } else {
        var messageDiv = document.getElementById("message");
        messageDiv.innerHTML = "Enter a valid mobile number (10 digits, starting with 6789)";
        messageDiv.style.color = "red";
    }
}

            
       

    </script>


    <script>
        // Get a reference to the profile and gender select elements
        const profileSelect = document.getElementById('pro');
        const genderSelect = document.getElementById('gen');

        // Add an event listener to the profile select element
        profileSelect.addEventListener('change', function () {
            const selectedProfile = profileSelect.value;

            if (selectedProfile === 'Son' || selectedProfile === 'Brother') {
                // Automatically set gender to 'Male' and disable the gender select
                genderSelect.value = 'Male';
                genderSelect.disabled = true;
            } else if (selectedProfile === 'Daughter' || selectedProfile === 'Sister') {
                // Automatically set gender to 'Female' and disable the gender select
                genderSelect.value = 'Female';
                genderSelect.disabled = true;
            } else {
                // Enable the gender select and reset its value
                genderSelect.disabled = false;
                genderSelect.value = 'Select Gender';
            }
        });
    </script>

    <script>
     function validateMobileNumber(input) {
    const mobileInput = input.value;
    const mobileError = document.getElementById('mobileError');

    // Use a regular expression to check if the number starts with 6, 7, 8, or 9 and is exactly 10 digits long
    const isValid = /^[6789]\d{9}$/.test(mobileInput);

    if (isValid) {
        mobileError.style.display = 'none';
    } else {
        mobileError.style.display = 'block';
        input.value = '';  // Clear the input value
    }
}
    </script>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>



<footer>

    <?php

    include('footer.php');

    ?>


</footer><!-- End Footer -->

</html>