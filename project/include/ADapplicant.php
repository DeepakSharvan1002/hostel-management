<?php
include('dbconnection.php');

$query = mysqli_query($con, 'select * from application order by appli_no desc');
if (mysqli_num_rows($query) > 0) {

} else {
    echo 'No record in the table';
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

</head>

<body>
<div class="container-fluid mx-1">
    <table class="table table-striped table-hover">
        <thead>
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
                $appli_no=$row['appli_no'];
                
                ?>

                <tr>
                    <td> <a href="../include/indiual.php">view</a></td>
                    <td><?php echo $appli_no;?></td>
                    <td>
                        <?php echo $row['appli_no']; ?>
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

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

</body>