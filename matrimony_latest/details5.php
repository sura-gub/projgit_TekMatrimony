<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Details5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<style>
    #hedu, #educa, #employe, #occupa, #money, #annual, #work, #state {
        background-color: transparent;
        border: none;
    }
</style>
<body style="background-image:linear-gradient(rgb(255,192,203,0.3)100%,rgb(255,192,203,0.3)100%),url('img/25th.jpg'); min-height: 800px; background-size: 100% 100%; background-repeat: no-repeat; background-position: center;"
      class="w-100">
<?php require(__DIR__ . '/matbase.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="text-start mt-4 ">
                <img src="img/tekmat.png" width="200px" height="90px" alt="Logo">
            </div>
            <div class="text-end" style="margin-right: 250px">
                <h5>Great! You have completed <span class="fs-3">80%</span></h5>
            </div>
        </div>
    </div>
    <div class="container mt-0" style="border-radius: 20px; background-color: rgba(255, 192, 203, 0.5); max-width: 1050px; padding: 20px; margin-top: 20px;">
        <div class="row mt-0">
            <div class="col-lg-12" style="margin-left: 20px;">
                <h4 class="text-center">Professional details help us to find the best companion.</h4>
                <form>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="highestEducation" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">Highest education :</h5>
                                    <input list="educationList" name="education" id="hedu"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Choose...">
                                    <datalist id="educationList">
                                        <option value="Aeronautical Engineering"></option>
                                        <option value="B.Arch"></option>
                                        <option value="B.E"></option>
                                        <option value="B.C.A"></option>
                                        <option value="B.Plan"></option>
                                        <option value="B.sc IT/Computer Science"></option>
                                        <option value="B.Tech"></option>
                                    </datalist>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="educationDetail" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">Education in Detail :</h5>
                                    <input list="educationDetailList" name="educationDetail" id="educa"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Choose...">
                                    <datalist id="educationDetailList">
                                        <option value="Government"></option>
                                        <option value="Private"></option>
                                        <option value="Others"></option>
                                    </datalist>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="employe" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">Employed in :</h5>
                                    <input list="employeList" name="employe" id="employe"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Choose...">
                                    <datalist id="employeList">
                                        <option value="Self Employed"></option>
                                        <option value="Media and News"></option>
                                        <option value="Entertainment"></option>
                                        <option value="Social Service"></option>
                                    </datalist>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="occupation" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">Occupation :</h5>
                                    <input list="occupationList" name="occupation" id="occupa"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Choose...">
                                    <datalist id="occupationList">
                                        <option value="Businessman"></option>
                                        <option value="Doctor"></option>
                                        <option value="Engineer"></option>
                                        <option value="Paramedic"></option>
                                        <option value="Developer"></option>
                                        <option value="Ticket collector"></option>
                                        <option value="Pilot"></option>
                                        <option value="Police Officer"></option>
                                        <option value="Electrician"></option>
                                        <option value="Salesperson"></option>
                                    </datalist>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="annualIncome" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">Annual Income :</h5>
                                    <input list="moneyList" name="money" id="money"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Currency Type">
                                    <datalist id="moneyList">
                                        <option value="Rupees(Rs)"></option>
                                        <option value="Dollar($)"></option>
                                        <option value="Yen"></option>
                                        <option value="Euro"></option>
                                        <option value="Dollar(CAD)"></option>
                                        <option value="Dirham(DH)"></option>
                                    </datalist>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="annualIncome" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">Amount :</h5>
                                    <input list="amountList" name="amount" id="annual"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Amount">
                                    <datalist id="amountList">
                                        <option value="0-1 lakhs"></option>
                                        <option value="1-2 lakhs"></option>
                                        <option value="2-3 lakhs"></option>
                                        <option value="3-4 lakhs"></option>
                                        <option value="4-5 lakhs"></option>
                                    </datalist>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="work" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">Work Location :</h5>
                                    <input list="workList" name="work" id="work"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Choose...">
                                    <datalist id="workList">
                                        <option value="India"></option>
                                        <option value="USA"></option>
                                        <option value="Japan"></option>
                                        <option value="UK"></option>
                                        <option value="UAE"></option>
                                        <option value="Canada"></option>
                                        <option value="China"></option>
                                    </datalist>
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label d-flex">
                                    <h5 class="w-50 mt-3">State :</h5>
                                    <input list="stateList" name="state" id="state"
                                           class="form-select border-bottom border-dark" style="width: 50%;" placeholder="Choose...">
                                    <datalist id="stateList">
                                        <option value="Tamil Nadu"></option>
                                        <option value="Kerala"></option>
                                        <option value="Delhi"></option>
                                        <option value="Maharashtra"></option>
                                        <option value="Odisha"></option>
                                        <option value="Assam"></option>
                                        <option value="Karnataka"></option>
                                    </datalist>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="button" onclick="update()" class="btn btn-primary btn-lg mt-4">Continue</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function update() {
        var hedu2 = document.getElementById("hedu").value;
        var educa2 = document.getElementById("educa").value;
        var employe2 = document.getElementById("employe").value;
        var occupa2 = document.getElementById("occupa").value;
        var money2 = document.getElementById("money").value;
        var annual2 = document.getElementById("annual").value;
        var work2 = document.getElementById("work").value;
        var state2 = document.getElementById("state").value;

        // Check if any of the fields are empty
        if (hedu2 === 'Choose...' || educa2 === 'Choose...' || employe2 === 'Choose...' || occupa2 === 'Choose...' ||
            money2 === 'Currency Type' || annual2 === 'Amount' || work2 === 'Choose...' || state2 === 'Choose...') {
            alert("Please fill in all fields");
            return; // Exit the function if any field is not selected
        }

        $.ajax({
            url: "details5insert.php",
            data: {
                uphedu2: hedu2,
                upeduca2: educa2,
                upemploye2: employe2,
                upoccupa2: occupa2,
                upmoney2: money2,
                upannual2: annual2,
                upwork2: work2,
                upstate2: state2
            },
            type: "POST",
            success: function (submit) {
                if (submit === "success") {
                    alert("Data updated successfully. Proceed to next page!");
                    window.location.href = "completed6.php";
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>
</html>
 