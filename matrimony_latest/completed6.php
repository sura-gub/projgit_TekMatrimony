<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>completed6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body style="background-image:linear-gradient(rgb(255,192,203,0.3)100%,rgb(255,192,203,0.3)100%),url('img/25th.jpg'); min-height: 800px; background-size: 100% 100%; background-repeat: no-repeat; background-position: center;" class="w-100">
<?php require(__DIR__ .'/matbase.php');?>

<div class="container col-lg-12 col-sm-12 col-md-8 col-xl-12">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-start mt-2">
                    <img src="../matrimony/img/tekmat.png" width="200px" height="90px" alt="Logo">
                </div>
                <div class="text-end mb-0" style="margin-right:250px">
                    <h5>Great! You have completed <span class="fs-3">90%</span></h5>
                </div>
            </div>
        </div>
        <div class="container" style="border-radius:20px; background-color: rgb(255,192,203,0.5); max-width: 1050px; padding: 20px;">
            <div class="row mt-0">
                <div class="col-lg-4 mt-3 mb-3">
                    <img src="img/iml1.jpg" width="330px" height="500px" style="border-radius:20px" alt="Image">
                </div>
                <div class="col-lg-8 mt-3">
                    <h3>Let the world know about your relative's awesomeness.</h3>
                    <div class="row mt-5">
                        <div class="col-md-3">
                            <p><b>About your relative</b></p>

                        </div>
                        <div class="col-md-6">
                            <div class="form-floating margin-left:-20px;">
                                <textarea class="form-control" placeholder="Leave a comment here" id="text"
                                    style=" width: 300px; height: 200px;"></textarea>
                                <label for="floatingTextarea2">Comments</label>
                            </div>

                        </div>
                        <div class="col-md-3">
                            <p><b> write a few words to get to know shibhu better</b></p>
                        </div>
                    </div>
                    <br>

                    <div class="col-md text-center mt-3">
                        <button type="button" onclick="update()" class="btn btn-primary btn-lg px-4 mt-1">completed</button>
                    </div>
                </div>

            </div>
        </div>
        <script>
function update()
{
	var text2=document.getElementById("text").value;

	
	
	
	
	
	$.ajax({ 
	
	   url:"com6insert.php",
	   data:{uptext2:text2},
	   type:"POST",
	   success:function(submit)
	   {
        if (submit === "success") {
                alert("Data updated successfully. Proceed to next page!");
                window.location.href = "image9.php";
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