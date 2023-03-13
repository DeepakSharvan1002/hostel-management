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
    <title>Compliant BOYS HOSTEL</title>
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
                <button type="button" class="btn"><a href="query.php">Query</a></button>
                <button type="button" class="btn"><a href="pre_query.php">Previous Query</a></button>
                <button type="button" class="btn"><a href="compliant.php"><span id="black">Compliant</span></a></button>
            </div>
        </div> 
        
        <div class="col-10" id="content" style="height:81.5vh;">
            <h2>Compliant</h2>
            <form method="post">

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Type</label>
                <div class="col-sm-9">
                    <select name="type" id="" class="form-control">
                    <option value=""> --select--</option>
                        <option value="Admin compliant">Admin</option>
                        <option value="satff compliant">satff</option>
                        <option value="maintanance compliant">maintanance</option>
                        <option value="decipline compliant">decipline</option>
                        <option value="food compliant">food</option>  
                        <option value="other">other</option>  
                    </select>
                </div>        
            </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Compliant</label>
                    <div class="col-sm-9">
                        <textarea name="compliant" id="reason" cols="30" placeholder="Enter the query here.." style="width:100%"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                      <input type="submit" class="form-control"  name="enter" id="submit" value="submit"/>
                    </div>
                  </div>
            </form>
        </div>
    </div>
</div>

<!-- --------------------side   content  is   end---------------------->


<!-- footer   of   the   page   -->
<?php
include('../include/footer.php');
?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php
if(isset($_POST['enter']))
{
    include('../include/dbconnection.php');

    $id = $_SESSION['id'];
    $comp = $_POST['compliant'];
    $type = $_POST['type'];  
    $result = mysqli_query($con,"insert into compliant (appli_no,compliant,type_c) values ('$id','$comp','$type')");
    if (!isset($result)) {
        echo '<script>alert ("Something went wroung , Please try again later")</script>';
    }
    else{
    echo '<script>alert ("Your compliant is uploaded successfully")</script>';
}
}
?>