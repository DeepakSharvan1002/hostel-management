<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
}
global $id;
include('../include/dbconnection.php');
if (isset($_POST['check'])) {
    $id = $_POST['id'];
    // $month = $_POST['month'];
    // $amount = $_POST['amount'];
}

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
        /* label , input 
        {
            padding-top: 20px;
        } */
        .form-group
        {
            padding-top: 10px;
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
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;">student</button>
                <button type="button" class="btn  mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;"><span id="black">fees Entry</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>

    <div class="container py-5 ">
        <div class="col-5 py-4 mx-auto">
            <form method="post">
            <div class="form-group row my-3">
                <label for="" class="col-4 col-form-label">Amount</label>
                <div class="col-8">
                    <input type="tel" name="id" id="" class="form-control" value="<?php echo $id; ?>" readonly>
                </div>
            </div>
            <div class="form-group row my-3">
                <label for="" class="col-4 col-form-label">month</label>
                <div class="col-8">
                    <select name="month" id="month" class="form-control" required>
                        <option value="">--- select month ---</option>
                        <?php
                        include('../include/dbfees.php');
                        $query = mysqli_query($confees, "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA = 'fees' ORDER BY STR_TO_DATE(CONCAT('0001 ', TABLE_NAME, ' 01'), '%Y %M %d')");
                        $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
                        foreach ($row as $option) 
                        { ?>
                            <?php 
                            
                                $table = $option['TABLE_NAME']; 
                                $query5 = mysqli_query($confees, "SELECT * FROM $table");
                                while($row5 = mysqli_fetch_assoc($query5)) 
                                {
                                    if ($option['TABLE_NAME'] != 'student_fees') 
                            {
                                    if ($row5['appli_no'] == $id )
                                    {
                                        ?>
                                        <option value="<?php echo $option['TABLE_NAME']; ?>">
                                        <?php
                                        echo $option['TABLE_NAME'];
                                        echo '</option>';
                                        ?>
                                        <?php
                                    }
                                } 
                            } 
                        }
                                ?>
                            
                    </select>
                </div>
            </div>
            <div class="form-group row my-3">
                <label for="" class="col-4 col-form-label">Amount</label>
                <div class="col-8">
                    <input type="tel" name="amount" id="" class="form-control" required>
                </div>
            </div>
            <div class="form-group row my-3">
                <div class="col-12">
                    <input type="submit" name="add" id="" value="add" class="form-control btn btn-primary">
                </div>
            </div>
            </form>
        </div>
    </div>
    <?php

    
    
global $id;
    if (isset($_POST['add'])) 
    {
        $id = $_POST['id'];
        $month = $_POST['month'];
        $amount = $_POST['amount'];
        
        echo $id;

        include('../include/dbfees.php');

        $query1 = mysqli_query($confees, "SELECT * FROM student_fees WHERE appli_no = '$id'");
        if (mysqli_num_rows($query1) > 0) 
        {
            while ($row = mysqli_fetch_assoc($query1)) 
            {

                $query2 = mysqli_query($confees, "SELECT * FROM $month WHERE appli_no ='$id'");
                if (mysqli_num_rows($query2) > 0) 
                {
                    while ($row2 = mysqli_fetch_assoc($query2)) 
                    {
                        if ($row2['status'] == 0) 
                        {
                            include('../include/dbfees.php');
                            mysqli_query($confees, "UPDATE $month SET status = 1 WHERE appli_no = '$id'");
                            echo '<script>alert("successed")</script>';
                        }
                    }
                } 
                else 
                {
                    echo 'there is no application number in the month table';
                }
            }
        } 
        else 
        {
            echo 'check the application number';
        }
    }

    ?>
    <!-- footer   of   the   page   -->
    <?php
    include('../include/footer.php');
    ?>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>