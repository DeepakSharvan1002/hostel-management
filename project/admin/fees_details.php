<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
}

global $month;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT BOYS HOSTEL</title>
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
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;">student</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;">fees Entry</button>
                <button type="button" class="btn mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;"><span id="black">fees</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>

    <div class="container pt-5">
        <div class="container-fluid">
            <div class="row">



                <!-- ------------------------------------------------------------------------------ -->

                <div class="col-5">
                    <form method="post" >
                        <div class="d-flex justify-content-center">
                            <div class="form-group row">
                                <div class="col">
                                    <label for="month">Month</label>
                                </div>
                                <div class="col">
                                    <select name="month" id="month" required>
                                        <option value="">--- select month ---</option>


                                        <?php
                                        include('../include/dbfees.php');
                                        $query = mysqli_query($confees, "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA = 'fees' ORDER BY STR_TO_DATE(CONCAT('0001 ', TABLE_NAME, ' 01'), '%Y %M %d')");
                                        $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
                                        foreach ($row as $option) { ?>
                                            <?php if ($option['TABLE_NAME'] != 'student_fees') { ?>
                                                <option value="<?php echo $option['TABLE_NAME']; ?>">
                                                <?php
                                                echo $option['TABLE_NAME'];
                                            }
                                                ?>
                                                </option>
                                            <?php
                                        } ?>
                                            >
                                    </select>
                                </div>
                                <div class="col">
                                    <input type="submit" value="Enter" name="submit">
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <!-- ------------------------------------------------------------------------ -->

                <div class="col-5">
                    <form method="post">
                        <div class="d-flex justify-content-left">
                            <div class="form-group row">
                                <div class="col">
                                    <label for="newmonth">Add new Month</label>
                                </div>
                                <div class="col">
                                    <input type="text" name="newmonth" placeholder="Enter the new month" autocomplete="off" requires pattern="[a-zA-z]{3}[1-0]{2}">
                                </div>
                                <div class="col">
                                    <input type="submit" value="create" name="new_month">
                                </div>
                            </div>
                        </div>

                    </form>
                    <?php
                    if (isset($_POST['new_month'])) {
                        $newmonth = $_POST['newmonth'];
                        include('../include/dbfees.php');

                        mysqli_query($confees, "CREATE TABLE `fees`.`$newmonth` (`appli_no` BIGINT(6) NULL , `name` TEXT NULL , `amount` BIGINT(6) NULL , `status` BIGINT(2) NULL , PRIMARY KEY (`appli_no`)) ENGINE = InnoDB;");
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php

        if (isset($_POST['submit'])) {

            global $month;
        global $select;
        $month = $_POST['month'];
        $check = strtotime(date_format(date_create($_POST['month']),'F Y'));
        include('../include/dbfees.php');
        $query = mysqli_query($confees,"SELECT * FROM student_fees");
        while ($row = mysqli_fetch_assoc($query)) 
        {
            $id = $row['appli_no'];
            $name = $row['name'];
            $date = strtotime(date_format(date_create($row['date']),'F Y'));
            if($date == $check)
            {
                $result = mysqli_query($confees,"INSERT INTO $month (appli_no,name,amount,status) values ($id,'$name',3200,0)");
                // if(!$result)
                // {
                //     echo mysqli_error($confees);
                // }
            }
            if ($date <= $check ) 
            {
                $select = $row['appli_no'];
                $query2 = mysqli_query($confees,"SELECT * FROM $month");
                while ($row2 = mysqli_fetch_assoc($query2)) 
                {
                    if ($row2['appli_no'] != $select) 
                    {
                       $success = mysqli_query($confees,"INSERT INTO $month (appli_no , name ,amount ,status) values ('$id','$name',3200,0)");
                    //    if(!isset($success))
                    //    {
                    //     echo mysqli_error($confees);
                    //    }
                    }
                    # code...
                }
            }
            
        }
       
            
        ?>
            <div class="container">
                <div class="d-flex justify-content-center pt-5 mx-4">
                    <h2><?php echo $month;  ?></h2>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <table class="table table-hover mx-5 mb-4">
                    <tr style="background-color: gray;">
                        <th>Appli_no</th>
                        <th>Name</th>
                        <th>amount</th>
                        <th>status</th>
                    </tr>




                    <?php
                    // $query1 = mysqli_query($confees, "SELECT * FROM student_fees");
                    // while ($row = mysqli_fetch_assoc($query1)) {
                    //     $id = $row['appli_no'];
                    //     $name = $row['name'];
                    //     $appli_date = $row['date'];
                    //     $str_appli_date = strtotime(date_format(date_create($appli_date), 'F Y'));
                        
                    //         $query2 = mysqli_query($confees, "SELECT * FROM $month");
                    //         while ($row2 = mysqli_fetch_assoc($query2)) {

                    //             echo $month;
                    //             if ($row2['appli_no'] != $id) {
                    //                 echo $month;
                    //                 if ($str_appli_date = $str_check) {
                    //                 include('../include/dbfees.php');
                    //                 mysqli_query($confees, "INSERT INTO $month (appli_no,name,amount,status) VALUES ('$id','$name',3200,0)");
                    //             }
                    //         }
                    //     }
                    // }

                    $query = mysqli_query($confees, "SELECT * FROM $month");
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?php echo $row['appli_no']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td>
                                <?php echo $row['amount']; ?>
                            </td>


                            <td>
                                <?php
                                if ($row['status'] == 0) {
                                    echo '<p style="color:red; font-weigth:bold;">not paid</p>';
                                } elseif ($row['status'] == 1) {
                                    echo '<p style="color:green; font-weigth:bold;">paid</p>';
                                }
                                ?>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

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