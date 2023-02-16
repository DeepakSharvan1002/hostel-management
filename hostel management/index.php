<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOYS HOSTEL</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
include('include/header.php');
?>

<!-- --------------------  image   banner   start --------------------- -->
<div class="container-fluid" id="image">
    <div class="col" id="con">
        <p>Feel like a Home <br><span id="contitle"> BOYS <span id="red">HOSTEL</span></span></p>
    </div>
</div>
<!-- --------------------  image   banner   end --------------------- --> 


<!-- --------------------  applicant   contant   start --------------------- --> 
<div class="container " id="application">
    <div class="col">
        <p>This is our hostel are you intrested in join in ourhostel <br>
        kindly fill the <span id="appli"> BOYS <span id="red">HOSTEL</span></span> appication form</p>
        <button type="button" class="btn"> <a href="html/application.php">Application</a> </button>
    </div>
</div>

<!-- --------------------  applicant   contant   end --------------------- --> 

<!-- --------------------  login   contant   start --------------------- --> 
<div class="container " id="application">
    <div class="col">
        <p>I am already a student of our <span id="appli"> BOYS <span id="red">HOSTEL</span></span><br>
        Are you like to login Student portal</p>
        <button type="button" class="btn"> <a href="html/login.php">login</a> </button>
    </div>
</div>

<!-- --------------------  login   contant   end --------------------- --> 

    <?php
    include('include/footer.php');
    ?>

<script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
