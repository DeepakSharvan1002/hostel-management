<?php

session_start();

if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
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
    <title>ADMIN APPLICANT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="applicant.css">
    <style>
        .black{
            color:black;
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
                <button type="button" class="btn mx-3" onclick="window.location.href='applicant.php'" style="border-radius:0rem;"><span id="black">Application</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;">student</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;">fees Entry</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>

<div class="contaier py-5">
<?php
include('../include/dbconnection.php');

$query = mysqli_query($con, 'select * from application order by appli_no desc');
if (mysqli_num_rows($query) > 0) {

} else {
    echo 'No record in the table';
}

?>

<div class="container-fluid mx-1">
    <table class="table table-striped table-hover">
        <thead>
            <th></th>
            <th>appli_no</th>
            <th>name</th>
            <th>father name</th>
            <th>Date of birth</th>
            <th>Address</th>
            <th>State</th>
            <th>District</th>
            <th>Pincode</th>
            <th>Phone number</th>
            <th>Father number</th>
            <th>Emial</th>
            <th>Status</th>
            <th>Religious</th>
            <th>Caste</th>
            <th>Nationality</th>
            <th>Aadhar no.</th>
        </thead>
        <tbody>

            <?php
            while ($row = mysqli_fetch_assoc($query)) { 
                $id = $row['appli_no'];

                ?>

                <tr>
                    <td>
                        <?php 
                    
                            $query2 = mysqli_query($con,"select * from selected where appli_no = $id");
                            while ($row2 = mysqli_fetch_assoc($query2)) { 
                                if ($row2['boys'] == 1) { 
                                    echo '<div class="circle" style = "height:20px; width:20px;background-color:green;border-radius:50px;border-style:solid;"></div>';
                                }
                                elseif ($row2['boys'] == 0) {
                                    echo '<div class="circle" style = "height:20px; width:20px;background-color:red;border-radius:50px;border-style:solid;"></div>';
                                }
                                else {
                                    echo '<div class="circle" style = "height:20px; width:20px;border-radius:50px;border-style:solid;"></div>';
                                }

                            }
                        ?>

                    </td>
                    <td>
                        <a href="../include/indiual.php?appli_no=<?php echo $row['appli_no']; ?>">
                        <?php echo $row['appli_no']; ?>
                        </a>
                    </td>
                    <td>
                        <?php echo $row['SFName'].' '. $row['SMName'].' '.$row['SLName']; ?>
                    </td>
                    <td>
                        <?php echo $row['FFName'].' '. $row['FMName'].' '.$row['FLName']; ?>
                    </td>
                    <td>
                        <?php echo $row['dob']; ?>
                    </td>
                    <td>
                        <?php echo $row['house_no'].'<br>'. $row['area'].'<br>'. $row['street']; ?>
                    </td>
                    <td>
                        <?php echo $row['state']; ?>
                    </td>
                    <td>
                        <?php echo $row['district']; ?>
                    </td>
                    <td>
                        <?php echo $row['pincode']; ?>
                    </td>
                    <td>
                        <?php echo $row['Sphone']; ?>
                    </td>
                    
                    <td>
                        <?php echo $row['Fphone']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['status']; ?>
                    </td>
                    <td>
                        <?php echo $row['religious']; ?>
                    </td>
                    <td>
                        <?php echo $row['caste']; ?>
                    </td>
                    <td>
                        <?php echo $row['nationality']; ?>
                    </td>
                    <td>
                        <?php echo $row['aadhar']; ?>
                    </td>

                </tr>
            <?php } ?>

        </tbody>
    </table>
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
