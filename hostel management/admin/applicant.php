

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN APPLICANT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="applicant.css">
</head>
<body>

    <!--              header   of  the   page               -->
<div class="container-fluid py-3 " id="header">
    <div class="container">
        <div class="row" id="row">
            <div class="col-6">BOYS HOSTEL</div>
            <div class="col-2" id="butten"><a href="applicant.php"><button>Application</a></button></a></div>
            <div class="col-2"><a href="fees_details.php">fees</a></div>
            <div class="col-2"><a href="stud_details.php">student</a></div>
        </div>
    </div>
</div>

<div class="container-fluid" id="title">
    <h3>ADMIN PORTAL</h3>
</div>

<div class="contaier">
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
<div class="container-fluid p-2" id="footer">
    <p>COPY@RIGHTS<BR>BOY HOSTEL</p>
</div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
