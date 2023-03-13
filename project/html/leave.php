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
    <title>LEAVE BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/leave.css">
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
                    <button type="button" class="btn"><a href="leave.php"><span id="black">Leave
                                Form</span></a></button>
                    <button type="button" class="btn"><a href="fees.php">Fees</a></button>
                    <button type="button" class="btn"><a href="query.php">Query</a></button>
                <button type="button" class="btn"><a href="pre_query.php">Previous Query</a></button>
                <button type="button" class="btn"><a href="compliant.php">Compliant</a></button>
                </div>
            </div>
    <!-- --------------------side   content  is   end---------------------->


            <div class="col-10" id="content">
                <h2>Leave form</h2>
                <form method="post">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="">Type of leave</label>
                        <div class="col-sm-3">
                            <input type="radio"  name="type_leave" value="medical" /><span id="nobold">Medical </span>
                        </div>
                        <div class="col-sm-3">
                            <input type="radio"  name="type_leave" value="special" /><span id="nobold">special </span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="from" class="col-sm-2 col-form-label">From</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="from" name="from" type="date" placeholder="MM/DD/YYY" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="to" class="col-sm-2 col-form-label">to</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="to" name="to" type="date" placeholder="MM/DD/YYY" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="reason" class="col-sm-2 col-form-label" id="rea">Reason</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="reason" name="reason" type="text" placeholder="Enter the reason here.." />
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



    <!-- ------------------ footer   of   the   page  --------------- -->
    <?php
include('../include/footer.php');
?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>


<?php
include('../include/dbconnection.php');
if (isset($_POST['enter'])) {
	
    $id = $_SESSION['id'];
    $type = $_POST['type_leave'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $reason = $_POST['reason'];

    $result = mysqli_query($con,"insert into leaveform (appli_no,type,lfrom,lto,reason) values ('$id','$type','$from','$to','$reason')");
    if (!isset($result)) {
        echo '<script>alert ("Something went wroung , Please try again later")</script>';
    }
    else{
    echo '<script>alert ("Your query is uploaded successfully")</script>';
}
    

}

?>