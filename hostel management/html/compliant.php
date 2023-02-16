<?php

session_start();

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    echo '<script>alert("Please login first")</script>';
}

$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        /* ----------------------  header  is   start  ---------------------- */
#header{
    background-color: red;
    color: white;
    height: auto;
}
#header a{
    text-decoration: none;
    color: white;
}
#header #row{
    font-size: 150%;
}
#header .col-6{
    font-weight: bolder;
    font-size:150% ;
}
#header .col-1{
    margin-top:0.5%;
}
#header button{
    width: 110%;
    height: 95%;
    background-color: black;
    margin-top: -10%;
    margin-left:-7%;
}
/* ----------------------header  is   end ---------------------- */

/* ----------------------footer  is   start ---------------------- */
#footer{
    background-color: red;
    text-align: center;
    font-weight: lighter;
    color: white;
    line-height: 95%;
    font-size: 75%;
    padding-bottom: 30%;
}
#footer p{
    letter-spacing: 8px;
}

/* ----------------------footer  is   end ---------------------- */


/* ----------------------slide  is   start ---------------------- */

#slidebar a{
    color: white;
    text-decoration: none;
    text-align: center;
}
.btn-group-vertical{
    width: 100%;
    /* 103 */

}
#slidepad{
    padding: 0px 0px 15.1% 0px;
    background-color:rgb(1, 52, 255);
}
#slidebar #slidepad button{
    background-color:rgb(1, 52, 255) !important ;
    padding: 6% 0%;
    font-size: 20px;
}
/* ----------------------slide  is   end ---------------------- */


/* ----------------------slide  is   start ---------------------- */

#slidebar a{
    color: white;
    text-decoration: none;
    text-align: center;
}
.btn-group-vertical{
    width: 100%;
    /* 103 */

}
#slidepad{
    padding: 0px 0px 15.1% 0px;
    background-color:rgb(1, 52, 255);
}
#slidebar #slidepad button{
    background-color:rgb(1, 52, 255);
    padding: 6% 0%;
    font-size: 20px;
}
#black{
    color: black;
}
/* ----------------------slide  is   end ---------------------- */

    </style>
</head>
<body>

    <!--              header   of  the   page               -->
<div class="container-fluid py-3 " id="header">
    <div class="container">
        <div class="row" id="row">
            <div class="col-6"><a href="../index.php" style="color:white;">BOYS HOSTEL</a></div>
            <div class="col-1"></div>
            <div class="col-1"></div>
            <div class="col-1"><a href="../index.php">Home</a></div>
            <div class="col-1"><a href="about.php" class="align-item-center">About</a></div>
            <div class="col-1"><a href="contact.php">Contact</a></div>
            <div class="col-1" id="butten"><button><a href="logout.php">logout</a></button></div>
        </div>
    </div>
</div>

<!-- --------------------side   content  is   start---------------------->

<div class="container-fluid" id="slidebar">
    <div class="row">
        <div class="col-2 border" id="slidepad">
            <div class="btn-group-vertical">
                <button type="button" class="btn"><a href="dashboard.php">Dashboard</a></button>
                <button type="button" class="btn"><a href="leave.php">Leave Form</a></button>
                <button type="button" class="btn"><a href="fees.php">Fees</a></button>
                <button type="button" class="btn"><a href="query.php">Query</a></button>
                <button type="button" class="btn"><a href="pre_query.php">Previous Query</a></button>
                <button type="button" class="btn"><a href="compliant.php"><span id="black">Compliant</span></a></button>
            </div>
        </div>
        <div class="col-10" style="height:84vh;">
            
        </div>
    </div>
</div>
</div>

<!-- --------------------side   content  is   end---------------------->

<!-- footer   of   the   page   -->
<div class="container-fluid p-2" id="footer">
    <p>COPY@RIGHTS<BR>BOY HOSTEL</p>
</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
