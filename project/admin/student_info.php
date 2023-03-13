<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
}
global $count;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECTED STUDENT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="stud_details.css">
    <style>
        .black {
            color: black;
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
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='applicant.php'" style="border-radius:0rem;">Application</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;"><span id="black">student</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;">fees Entry</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>


    <div class="container-fluid mx-2">
        <?php
        if (isset($_GET['no'])) {
            $id = $_GET['no'];
            $val = $id;
            include('../include/dbconnection.php');
            $query = "select * from application where appli_no='$val'";

            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                $appli_no = $row['appli_no'];
                $name = $row['SFName'] . ' ' . $row['SMName'] . ' ' . $row['SLName'];
        ?>
                <div class="row">
                    <div class="col-6">

                        <div class="container-fluid">
                            <div class="col mx-3 py-3">
                                <table class="table table-striped">
                                    <tr>
                                        <th>Appli no</th>
                                        <td><?php echo $row['appli_no']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td><?php echo $row['SFName'] . ' ' . $row['SMName'] . ' ' . $row['SLName']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Father name</th>
                                        <td><?php echo $row['FFName'] . ' ' . $row['FMName'] . ' ' . $row['FLName']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>DOB</th>
                                        <td><?php echo $row['dob']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td><?php echo $row['house_no'] . '<br>' . $row['area'] . '<br>' . $row['street']; ?></td>
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
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="container pt-5 ml-5">
                            <h1>Fees Status</h1>
                        </div>

                        <div class="container mx-5 py-5">
                            <div class="col-6 mx-auto">
                                <table class="table table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Month</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('../include/dbfees.php');
                                        $query = mysqli_query($confees, "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA = 'fees' ORDER BY STR_TO_DATE(CONCAT('0001 ', TABLE_NAME, ' 01'), '%Y %M %d')");
                                        $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                        foreach ($row as $option) {
                                            $optionss = $option['TABLE_NAME'];
                                            if ($option['TABLE_NAME'] != 'student_fees') {
                                        ?>
                                                <tr>
                                                    
                                                    <?php
                                                    $query = mysqli_query($confees, "SELECT * FROM $optionss WHERE appli_no = $id");
                                                    while ($row = mysqli_fetch_assoc($query)) {
                                                    ?>
                                                        <td><?php echo $option['TABLE_NAME']; ?></td>
                                                        <td><?php echo $row['amount']; ?></td>
                                                        <td>
                                                            <?php
                                                            if ($row['status'] == 0) {
                                                                echo '<p style="color:red; font-weigth:bold;">not paid</p>';
                                                            } elseif ($row['status'] == 1) {
                                                                echo '<p style="color:green; font-weigth:bold;">paid</p>';
                                                            }
                                                            ?>
                                                        </td>
                                                    <?php
                                                    }
                                                    ?>

                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                include('../include/dbfees.php');
                                $query = mysqli_query($confees, "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA = 'fees' ORDER BY STR_TO_DATE(CONCAT('0001 ', TABLE_NAME, ' 01'), '%Y %M %d')");
                                $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                foreach ($row as $option) {
                                    $optionss = $option['TABLE_NAME'];
                                    if ($option['TABLE_NAME'] != 'student_fees') 
                                    {
                                        $query = mysqli_query($confees, "SELECT * FROM $optionss WHERE appli_no = $id");
                                         $count;
                                        while ($row = mysqli_fetch_assoc($query)) 
                                        {
                                            if ($row['status'] == 0) 
                                            {
                                                $count = $count + 1;
                                            }
                                        }
                                    }
                                }
                                if ($count > 0) {
                                    echo '<div class="d-grid gap-2">
                                    <button class="btn disabled" style ="background-color:red;color:white;"> Left</button>
                                    </div>';
                                }
                                else { ?>
                                    <div class="d-grid gap-2">
                                    <button class="btn btn-primary" onclick="window.location.href='vacate_fn.php?appli_no=<?php echo $id;?>'">left</button>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
        <?php
            }
        }
        ?>
    </div>



    <!-- footer   of   the   page   -->
    <?php
    include('../include/footer.php');
    ?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>