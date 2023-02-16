

<?php 
session_start();
if(!isset($_SESSION['id'])){
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
    <style>
        /* ----------------------  header  is   start  ---------------------- */
#header{
    background-color: red;
    color: white;
    height: auto;
}

/* ----------------------header  is   end ---------------------- */

/* ----------------------  admin   portal  start---------------------- */
#title{
    text-align: center;
}
#title h3{
    font-size: 200%;
    font-weight: bolder;
}

/* ----------------------  admin   portal  end---------------------- */

/* ----------------------footer  is   start ---------------------- */
#footer{
    background-color: red;
    text-align: center;
    font-weight: lighter;
    color: white;
    line-height: 95%;
    font-size: 75%;
}
#footer p{
    letter-spacing: 8px;
    text-align: center;
}

/* ----------------------footer  is   end ---------------------- */

a{
    text-decoration: none;
    
}
    </style>


</head>
<body>

     <!--              header   of  the   page               -->
<div class="container-fluid py-3 " id="header">
    <div class="container">
        <div class="row" id="row">
            <div class="col-4" style="font-weight:bold; font-size:225%;"><a href="../index.php" style="color:white;">BOYS HOSTEL</a></div>
            <div class="col-5"></div>
            <div class="col-3" style="font-weight:bold; font-size:225%;">ADMIN PORTAL</div>
        </div>
    </div>
</div>

<div class="container-fluid py-1 border ">
        <div class="row" id="row">
            <div class="col-1"></div>
            <div class="col-1"><a href="applicant.php">Application</a></div>
            <div class="col-1"><a href="stud_details.php">student</a></div>
            <div class="col-1"><a href="fees_details.php">fees</a></div>
            <div class="col-1"><a href="adquery.php">Query</a></div>
            <div class="col-1"><a href="adcompliant.php">Complaint</a></div>
            <div class="col-1"><a href="adleave.php"><button>Leave</button></a></div>
            <div class="col-1"><a href="adreport.php">Report</a></div>
            <div class="col-1"><a href="../html/logout.php">logout</a></div>
        </div>
</div>


<!-- footer   of   the   page   -->
<div class="container-fluid p-2" id="footer">
    <p>COPY@RIGHTS<BR>BOY HOSTEL</p>
</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
