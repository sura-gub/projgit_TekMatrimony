<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
 
    <title>Regis4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .pic {
            text-align: start;
            margin-top: 20px;
        }

        .great {
            text-align: right;
            margin-top: 20px;
        }

        .bg {
            background-color: pink;
        }

        .image-container {
            padding: 20px;
        }

        .form-container {
            padding: 20px;
        }
    </style>
</head>

<body style="background-image:linear-gradient(rgb(255,192,203,0.3)100%,rgb(255,192,203,0.3)100%),url('img/25th.jpg'); min-height: 800px; background-size: 100% 100%; background-repeat: no-repeat; background-position: center;" class="w-100">
    <?php require(__DIR__ . '/matbase.php'); ?>
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pic">
                    <img src="img/tekmat.png" width="200px" height="90px" alt="Logo">

                    <h5 class="text-end" style="margin-right:250px">Great! You have completed <span class="fs-3">60%</span></h5>
                </div>
            </div>
        </div>
        <div class="container" style="border-radius:20px; background-color: rgb(255,192,203,0.5); max-width: 1050px; padding: 20px;">
            <div class="row">
                <!-- <div class="col-lg-4 mt-1 image-container">
                <img src="img/iml1.jpg" width="330px" height="500px" style="border-radius:20px" alt="Image">
                </div> -->
                <div class="col-lg-10" style="margin-left:100px;">
                    <h3 class="text-center">Tell us about your relative's personal details.</h3>
                    <form style="margin-right:130px;">
                        <!-- Marital Status -->



                        <script>
                            function mrsts1(status) {
                const buttons = document.querySelectorAll('.aa');
                buttons.forEach(button => button.classList.remove('active'));
                event.target.classList.add('active');
                // Here you can do something with the selected marital status 'status'
                console.log('Selected Marital Status:', status);
                document.getElementById('mrgstatus').value = status;

                // Check if "Never Married" is selected, and hide/show relevant sections
                if (status === 'Never Married') {
                    document.getElementById('nofchilContainer').style.display = 'none';
                    document.getElementById('chilstaContainer').style.display = 'none';
                    document.getElementById('nofchil').disabled = true;
                    document.getElementById('chilsta').disabled = true;
                } else {
                    document.getElementById('nofchilContainer').style.display = 'block';
                    document.getElementById('chilstaContainer').style.display = 'block';
                    document.getElementById('nofchil').disabled = false;
                    document.getElementById('chilsta').disabled = false;
                }
            }

                        </script>

                        <!-- Marital Status -->
                        <div class="row mb-2">
    <div class="col-4 mt-3">
        <h5>Marital status:</h5>
    </div>
    <div class="col-8 mt-3">
        <input type="hidden" id="mrgstatus" />
        <div class="d-flex" id="MS" aria-label="Marital Status">
            <button type="button" class="btn btn-outline-primary btn-sm aa me-2"
                onclick="mrsts1('Never Married')">Never Married</button>
            <button type="button" class="btn btn-outline-primary btn-sm aa me-2"
                onclick="mrsts1('Widowed')">Widowed</button>
            <button type="button" class="btn btn-outline-primary btn-sm aa me-2"
                onclick="mrsts1('Divorced')">Divorced</button>
            <button type="button" class="btn btn-outline-primary btn-md aa"
                onclick="mrsts1('Awaiting Divorce')">Awaiting Divorce</button>
        </div>
    </div>
</div>
                        <!-- No. of Children -->

                        <script>
                            function nofchil2(status) {
                                const buttons = document.querySelectorAll('.bb');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected No.of Childrens 'status'
                                console.log('Selected No.of Childrens:', status);
                                document.getElementById('nofchil').value = status;
                            }
                        </script>


        <!-- No. of Childrens -->
        
        <div class="row mb-2" id="nofchilContainer"  style="display:none">
        <div class="d-flex">
    <div class="col-4 mt-3">
        <h5>No. of Children:</h5>
    </div>
    <div class="col-8 mt-3">
        <input type="hidden" id="nofchil" />
        <div class="d-flex" id="NOC" aria-label="Number of Children">
            <button type="button" class="btn btn-outline-primary btn-md bb me-2"
                onclick="nofchil2('None')">None</button>
            <button type="button" class="btn btn-outline-primary btn-md bb me-2"
                onclick="nofchil2('1')">1</button>
            <button type="button" class="btn btn-outline-primary btn-md bb me-2"
                onclick="nofchil2('2')">2</button>
            <button type="button" class="btn btn-outline-primary btn-md bbb me-2"
                onclick="nofchil2('3')">3</button>
            <button type="button" class="btn btn-outline-primary btn-md bb"
                onclick="nofchil2('4and above')">4 and above</button>
        </div>
    </div>
    </div>
</div>

        

                        <!-- Children Living Status -->

                        <script>
                            function chilsta3(status) {
                                const buttons = document.querySelectorAll('.cc');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Children Living Status 'status'
                                console.log('Selected Children Living Status:', status);
                                document.getElementById('chilsta').value = status;
                            }
                        </script>

                                 <!-- Children Living Status -->
                                 <div class="row mb-2" id="chilstaContainer" style="display:none">
                                 <div class="d-flex">
    <div class="col-4 mt-3">
        <h5>Children Living Status:</h5>
    </div>
    <div class="col-8 mt-3">
        <input type="hidden" id="chilsta" />
        <div class="d-flex" id="CLS" aria-label="Children Living Status">
            <button type="button" class="btn btn-outline-primary btn-md cc me-2"
                onclick="chilsta3('Children living with me')">Children living with me</button>
            <button type="button" class="btn btn-outline-primary btn-md cc"
                onclick="chilsta3('Children not living with me')">Children not living with me</button>
        </div>
    </div>
    </div>
</div>


                        <!-- Family Status -->

                        <script>
                            function famsta4(status) {
                                const buttons = document.querySelectorAll('.dd');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Family Status 'status'
                                console.log('Selected Family Status:', status);
                                document.getElementById('famsta').value = status;
                            }
                        </script>
<div class="row mb-2">
    <div class="col-4 mt-3">
        <h5>Family Status:</h5>
    </div>
    <div class="col-8 mt-3">
        <input type="hidden" id="famsta" />
        <div class="d-flex" id="FS" aria-label="Family Status">
            <button type="button" class="btn btn-outline-primary btn-md dd me-2"
                onclick="famsta4('Middleclass')">Middleclass</button>
            <button type="button" class="btn btn-outline-primary btn-md dd me-2"
                onclick="famsta4('Upper Middleclass')">Upper Middleclass</button>
            <button type="button" class="btn btn-outline-primary btn-md dd"
                onclick="famsta4('Affluent')">Affluent</button>
        </div>
    </div>
</div>

                        <!-- Family Type -->

                        <script>
                            function famty5(status) {
                                const buttons = document.querySelectorAll('.ee');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Family Type 'status'
                                console.log('Selected Family Type:', status);
                                document.getElementById('famty').value = status;
                            }
                        </script>
<div class="row mb-2">
    <div class="col-4 mt-3">
        <h5>Family Type:</h5>
    </div>
    <div class="col-8 mt-3">
        <input type="hidden" id="famty" />
        <div class="d-flex" id="FT" aria-label="Family Type">
            <button type="button" class="btn btn-outline-primary btn-md ee me-2"
                onclick="famty5('Joint')">Joint</button>
            <button type="button" class="btn btn-outline-primary btn-md ee"
                onclick="famty5('Nuclear')">Nuclear</button>
        </div>
    </div>
</div>


                        <!-- Family Values -->

                        <script>
                            function famval6(status) {
                                const buttons = document.querySelectorAll('.ff');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');


                                document.getElementById('famval').value = status;
                            }
                        </script>
<div class="row mb-2">
    <div class="col-4 mt-3">
        <h5>Family Values:</h5>
    </div>
    <div class="col-8 mt-3">
        <input type="hidden" id="famval" />
        <div class="d-flex" id="FV" aria-label="Family Values">
            <button type="button" class="btn btn-outline-primary btn-md ff me-2"
                onclick="famval6('Orthodox')">Orthodox</button>
            <button type="button" class="btn btn-outline-primary btn-md ff me-2"
                onclick="famval6('Traditional')">Traditional</button>
            <button type="button" class="btn btn-outline-primary btn-md ff me-2"
                onclick="famval6('Moderate')">Moderate</button>
            <button type="button" class="btn btn-outline-primary btn-md ff"
                onclick="famval6('Liberal')">Liberal</button>
        </div>
    </div>
</div>

                        <!-- Any Disability -->

                        <script>
                            function any7(status) {
                                const buttons = document.querySelectorAll('.gg');
                                buttons.forEach(button => button.classList.remove('active'));
                                event.target.classList.add('active');
                                // Here you can do something with the selected Any Disability 'status'
                                console.log('Selected Any Disability:', status);
                                document.getElementById('any').value = status;
                            }
                        </script>
<div class="row mb-2">
    <div class="col-4 mt-3">
        <h5>Any Disability:</h5>
    </div>
    <div class="col-8 mt-3">
        <input type="hidden" id="any" />
        <div class="d-flex" id="AD" aria-label="Any Disability">
            <button type="button" class="btn btn-outline-primary btn-md gg me-2"
                onclick="any7('None')">None</button>
            <button type="button" class="btn btn-outline-primary btn-md gg"
                onclick="any7('Physically challenged')">Physically challenged</button>
        </div>
    </div>
</div>

                        <br>

                        <div class="col-md text-center">
                            <button type="button" onclick="update()"
                                class="btn btn-primary btn-lg px-4 mt-1">Continue</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            function update() {
                var mrgstatus2 = document.getElementById("mrgstatus").value;
                var nofchil2 = document.getElementById("nofchil").value;
                var chilsta2 = document.getElementById("chilsta").value;
                var famsta2 = document.getElementById("famsta").value;
                var famty2 = document.getElementById("famty").value;
                var famval2 = document.getElementById("famval").value;
                var any2 = document.getElementById("any").value;

                if (mrgstatus2 === '' || (mrgstatus2 !== 'Never Married' && (nofchil2 === '' || chilsta2 === '')) ||
                    famsta2 === '' || famty2 === '' || famval2 === '' || any2 === '') {
                    alert("Please fill in all fields");
                    return; // Exit the function if any required field is empty
                }

                $.ajax({
                    url: "regis4insert.php",
                    data: {
                        upmrgstatus2: mrgstatus2,
                        upnofchil2: nofchil2,
                        upchilsta2: chilsta2,   
                        upfamsta2: famsta2,
                        upfamty2: famty2,
                        upfamval2: famval2,
                        upany2: any2
                    },
                    type: "POST",
                    success: function (submit) {
                        if (submit === "success") {
                alert("Data updated successfully. Proceed to next page!");
                window.location.href = "details5.php";
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