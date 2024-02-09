<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <style>
        #dob, #reli, #mother, #email, #pass {
            background-color: transparent;
            border: none;
        }

        .background-image {
            background-image: linear-gradient(rgb(255, 192, 203, 0.3) 100%, rgb(255, 192, 203, 0.3) 100%),
                url('img/25th.jpg');
            min-height: 800px;
            background-size: 100% 100%;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body class="background-image">
    <?php
if (!isset($_SESSION['sesno'])) {
    ?>
    <script>
        window.location.href = "index.php";
    </script>
    <?php
}
?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-start">
                    <img src="img/tekmat.png" width="200px" height="90px" alt="Logo">
                </div>
            </div>
        </div>
        <div class="container mt-0" style="border-radius: 20px; background-color: rgba(255, 192, 203, 0.5); max-width: 1050px; padding: 20px; margin-left: 0;">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h3>Please provide us basic details.</h3>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <form>
                        <div class="mb-3">
                            <label for="dob" class="col-form-label d-flex">
                                <h5 class="w-25 mt-3">Date of Birth :</h5>
                                <input type="date" class="form-control border-bottom border-dark" id="dob">
                            </label>
                            <p class="text-center"><small>Your <span id="profilechoice"></span>'s date of birth helps us find the perfect match.</small></p>
                        </div>
                        <div class="mb-3">
                            <label for="religion" class="form-label d-flex">
                                <h5 class="w-25 mt-3">Religion :</h5>
                                <select id="reli" class="form-select border-bottom border-dark">
                                    <option selected disabled>Choose...</option>
                                    <option>Christian</option>
                                    <option>Hindu</option>
                                    <option>Islam</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="motherTongue" class="form-label d-flex">
                                <h5 class="w-25 mt-3">Mother Tongue :</h5>
                                <select id="mother" class="form-select border-bottom border-dark">
                                    <option selected disabled>Choose...</option>
                                    <option>English</option>
                                    <option>Hindi</option>
                                    <option>Tamil</option>
                                    <option>Malayalam</option>
                                    <option>Telugu</option>
                                    <option>Bengali</option>
                                </select>
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-form-label d-flex">
                                <h5 class="w-25 mt-3"><span style="color: red;">*</span> Email ID :</h5>
                                <input type="email" placeholder="Enter Your Email" class="form-control border-bottom border-dark" id="email">
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-form-label d-flex">
                                <h5 class="w-25 mt-3"><span style="color: red;">*</span> Password :</h5>
                                <input type="password" placeholder="Create Password" class="form-control border-bottom border-dark" id="pass">
                            </label>
                            <small>
                                <p class="text-center">Make sure to remember your Email ID and Password for login into your Profile</p>
                            </small>
                        </div>
                        <div class="mb-3 text-center">
                            <button type="button" onclick="upd()" class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        var storedProfile = sessionStorage.getItem("profile");
        if (storedProfile) {
            document.getElementById("profilechoice").textContent = storedProfile;
        }

        function upd() {
            var dob2 = document.getElementById("dob").value;

            var reli2 = document.getElementById("reli").value;

            var mother2 = document.getElementById("mother").value;

            var email2 = document.getElementById("email").value;

            var pass2 = document.getElementById("pass").value;

            // Check if any of the fields are empty
            if (dob2 === '' || reli2 === '' || mother2 === '' || email2 === '' || pass2 === '') {
                alert("Please fill in all fields");
                return; // Exit the function if any field is empty
            }
            if (pass2.length < 6 || pass2.length > 8) {
                alert("Password must be between 6 and 8 characters");
                return; // Exit the function or stop further code execution
            }
            $.ajax({
                url: "profile2insert.php", // Check if the URL is correct
                data: {
                    updob2: dob2,
                    upreli2: reli2,
                    upmother2: mother2,
                    upemail2: email2,
                    uppass2: pass2
                },
                type: "POST",
                success: function (submit) {
                    if (submit === "success") {
                        alert("Data updated successfully. Proceed to the next page!");
                        window.location.href = "pro3.php";
                    } else {
                        alert("Email Already Exists."); // You can provide an appropriate error message
                    }
                },
                error: function () {
                    alert("An error occurred while updating the data");
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
