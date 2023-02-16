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
    <title>REPORT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/report.css">
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
            <div class="col-1" id="butten"><button><a href="logout.php">Logout</a></button></div>
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
                <button type="button" class="btn"><a href="query.php"><span id="black">Query</span></a></button>
                <button type="button" class="btn"><a href="pre_query.php">Previous Query</a></button>
                <button type="button" class="btn"><a href="compliant.php">Compliant</a></button>
            </div>
        </div> 
        
        <div class="col-10" id="content">
            <h2>Query</h2>
            <form action="/" method="post">

                <div class="form-group row">
                    <label for="report" class="col-sm-2 col-form-label">Query</label>
                    <div class="col-sm-9">
                        <textarea name="query" id="reason" cols="30" placeholder="Enter the query here.." style="width:100%"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="ans" class="col-sm-2 col-form-label">Admin replay</label>
                    <div class="col-sm-9 border" style="height:200px;">
                        
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="submit" class="form-control"  name="submit" id="submit"/>
                    </div>
                  </div>
            </form>


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
