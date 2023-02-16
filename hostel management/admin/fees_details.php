<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
}
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
</head>

<body>

    <!--              header   of  the   page               -->
    <div class="container-fluid py-3 " id="header">
        <div class="container">
            <div class="row" id="row">
                <div class="col-4" style="font-weight:bold; font-size:150%;"><a href="../index.php"
                        style="color:white;">BOYS HOSTEL</a></div>
                <div class="col-5"></div>
                <div class="col-3" style="font-weight:bold; font-size:150%;">ADMIN PORTAL</div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 border ">
        <div class="row" id="row">
            <div class="col-1"></div>
            <div class="col-1"><a href="applicant.php">Application</a></div>
            <div class="col-1"><a href="stud_details.php">student</a></div>
            <div class="col-1"><a href="fees_details.php"><button>fees</button></a></div>
            <div class="col-1"><a href="adquery.php">Query</a></div>
            <div class="col-1"><a href="adcompliant.php">Complaint</a></div>
            <div class="col-1"><a href="adleave.php">Leave</a></div>
            <div class="col-1"><a href="adreport">Report</a></div>
            <div class="col-1"><a href="../html/logout.php">logout</a></div>
        </div>
    </div>

    <!------------------------ fees details entry---------------------------- -->
    <div class="container pt-5 ">
        <div class="container-fluid">

            <form method="post">
                <div class="d-flex justify-content-center">
                    <div class="form-group row">
                        <div class="col">
                            <label for="month">Month</label>
                        </div>
                        <div class="col">
                            <select name="month" id="month">
                                <option value="*">select month</option>
                                <option value="select appli_no , name , jan23 , jan23status from ad_fees">Jan 2023</option>
                                <option value="select appli_no , name , feb23 , feb23status from ad_fees">Feb 2023</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="submit" value="Enter" name="submit">
                        </div>
                    </div>
                </div>
            </form>

        </div><div class="d-flex justify-content-center">
        <table class="table table-hover mx-5 my-4">
        
            <tr>
                <th>Appli_no</th>
                <th>Name</th>
                <th>amount</th>
                <th>status</th>
                <th></th>
            </tr>
            <?php
                include("../include/dbconnection.php");
                if (isset($_POST['submit'])) {
                    $potio = $_POST['month'];
                    echo $potio;
                }
                // $query = mysqli_query($con,"")
            ?>
        
        </table>
    </div></div>



    <!-- footer   of   the   page   -->
    <div class="container-fluid p-2" id="footer">
        <p>COPY@RIGHTS<BR>BOY HOSTEL</p>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>