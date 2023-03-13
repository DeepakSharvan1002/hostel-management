<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
}
global $id;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="stud_details.css">
    <style>
        label {
            font-size: 110%;
            font-weight: bold;
        }

        .black {
            color: black;
        }
    </style>
</head>

<body>

    <!--              header   of  the   page               -->
    <?php
    include("../include/adheader.php");
    ?>
    <div class="container-fluid py-1 border " style="background-color:#0d6efd;">
        <div class="d-flex justify-content-center">
            <div class="btn-group">
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='applicant.php'" style="border-radius:0rem;">Application</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;">student</button>
                <button type="button" class="btn  mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;"><span id="black">fees Entry</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>

    <div class="container py-5 ">
        <div class="col-5 py-4 mx-auto">
            <form method="post" action="entrie2.php">
                <div class="form-group row my-3">
                    <label for="" class="col-4 col-form-label">application no</label>
                    <div class="col-8">
                        <input type="tel" class="form-control" name="id" required>
                    </div>
                </div>
                <div class="form-group row my-3">
                    <div class="col-12">
                        <input type="submit" name="check" id="" value="Check" class="form-control btn btn-primary">
                    </div>
                </div>
            </form>
            <!-- <?php
            // if (isset($_POST['check'])) {
            //     $id = $_POST['id'];
            //     // $month = $_POST['month'];
            //     // $amount = $_POST['amount'];
                
            // }
            ?> -->

        </div>
    </div>

    <!-- footer   of   the   page   -->
    <?php
    include('../include/footer.php');
    ?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>