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
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>

    <!--              header   of  the   page               -->
<div class="container-fluid py-3 " id="header">
    <div class="container">
        <div class="row" id="row">
            <div class="col-6">BOYS HOSTEL</div>
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
        <div class="col-3 border" id="slidepad">
            <div class="btn-group-vertical">
                <button type="button" class="btn"><a href="dashboard.php"><span id="black">Dashboard</span></a></button>
                <button type="button" class="btn"><a href="leave.php">Leave Form</a></button>
                <button type="button" class="btn"><a href="fees.php">Fees</a></button>
                <button type="button" class="btn"><a href="report.php">Report</a></button>
            </div>
        </div>
        <div class="col-9">
            <?php 

                    include('../include/dbconnection.php');
                    $query = "select * from application where appli_no= '$id'";
                    $result = mysqli_query($con,$query);
                    while($row = mysqli_fetch_assoc($result))
                    {
                        ?>

<div class="container py-5" style="width: 80%; font-size:30px;">
                <table class="table table-striped">
                <tr>
                        <th>Appli no</th>
                        <td><?php echo $row['appli_no']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['SFName'].' '. $row['SMName'].' '.$row['SLName']; ?></td>
                    </tr>
                    <tr>
                        <th>Father name</th>
                        <td><?php echo $row['FFName'].' '. $row['FMName'].' '.$row['FLName']; ?></td>
                    </tr>
                    <tr>
                        <th>DOB</th>
                        <td><?php echo $row['dob']; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $row['house_no'].'<br>'. $row['area'].'<br>'. $row['street']; ?></td>
                    </tr>
                    <tr>
                        <th>District</th>
                        <td><?php echo $row['district']; ?></td>
                    </tr>
                    <tr>
                        <th>State</th>
                        <td><?php echo $row['state']; ?></td>
                    </tr>
                    <tr>
                        <th>Pincode</th>
                        <td><?php echo $row['pincode']; ?></td>
                    </tr>
                    <tr>
                        <th>Number</th>
                        <td><?php echo $row['Sphone']; ?></td>
                    </tr>
                    <tr>
                        <th>Father number</th>
                        <td><?php echo $row['Fphone']; ?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $row['email']; ?></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?php echo $row['status']; ?></td>
                    </tr>
                    <tr>
                        <th>Religious</th>
                        <td><?php echo $row['religious']; ?></td>
                    </tr>
                    <tr>
                        <th>Caste</th>
                        <td><?php echo $row['caste']; ?></td>
                    </tr>
                    <tr>
                        <th>Nationality</th>
                        <td><?php echo $row['nationality']; ?></td>
                    </tr>
                    <tr>
                        <th>Aadhar</th>
                        <td><?php echo $row['aadhar']; ?></td>
                    </tr>
                </table>

                   <?php }
            ?>
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
