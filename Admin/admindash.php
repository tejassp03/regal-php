<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="../css/regal.css" rel="stylesheet">
    <title>Regal Test</title>
</head>
<style>
    @media (max-width: 768px) {
        .container {
            width: 98% !important;
        }
    }

    .row {

        display: flex;
        flex-direction: row !important;
        

    }
</style>

<body>
    <?php include "adminheader.php"; ?>




    <div class="container mt-4" style="padding: 20px;width:auto;margin:auto;">

        <div class="row mb-6" >
            <div class="card dashcard p-3 mr-6">
                <h3 class="subtitle is-10">Total Students</h3>
                <h2 class="title is-10">358</h2>
            </div>
            <div class="card dashcard p-3 mr-6">
                <h3 class="subtitle is-10">Average Practice Time/Day</h3>
                <h2 class="title is-8">1h 24mins</h2>
            </div>
            <div class="card dashcard p-3 mr-6">
                <h3 class="subtitle is-10">Total Questions</h3>
                <h2 class="title is-8">1543</h2>
            </div>
            <div class="card dashcard p-3 mr-6">
                <h3 class="subtitle is-10">Total Registrations This Week</h3>
                <h2 class="title is-8">15 <span style="font-size: 20px;font-weight:400;">(Target 23) </span></h2>
            </div>
            <div class="card dashcard p-3 mr-6">
                <h3 class="subtitle is-10">Total Registrations This Month</h3>
                <h2 class="title is-8">57 <span style="font-size: 20px;font-weight:400;">(Target 70) </span></h2>
            </div>
            
        </div>

        <h2 class="title mt-3 mb-5">Recently Registered</h2>
        <div class="tablecontainer" style="overflow-x: auto;">
            <table class="table">
                <thead>
                    <tr>

                        <th>Sl.No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Payment Status</th>
                        <th>Date of Reg</th>
                        <th>Check Results</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>


                        <th>1</th>
                        <th><input class="input is-info " type="text" value="Tejas" style="width: 95%;" placeholder="Name"
                            readonly>
                        </th>
                        <th><input class="input is-info " type="text" value="746876874" style="width: 95%;" placeholder="Phone"
                                readonly></th>
                        <th><input class="input is-info " type="text" value="tejas@iclubindia.com" style="width: 95%;" placeholder="Email"
                                readonly></th>
                        <th><input class="input is-info " type="text" style="width: 95%;" placeholder="Payment Status" value="Paid"
                                readonly></th>
                        <th><input class="input is-info " type="date" id="Dor" style="width: 95%;" placeholder="Date"
                                readonly></th>
                        <th><button class="button">Check Results</button></th>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>



</body>
<script src="../javascript/index.js">
function My_Date() {
            document.getElementById("Dor").value = "2019-02-04";
        }
</script>

</html>