<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
}

$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEES BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fees.css">
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
                    <button type="button" class="btn"><a href="fees.php"><span id="black">Fees</span></a></button>
                    <button type="button" class="btn"><a href="query.php">query</a></button>
                    <button type="button" class="btn"><a href="pre_query.php">Previous Query</a></button>
                    <button type="button" class="btn"><a href="compliant.php">Compliant</a></button>
                </div>
            </div>

            
            <div class="col-10">
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
                    </div>
                </div>
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