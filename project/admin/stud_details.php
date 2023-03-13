<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
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
                <button type="button" class="btn mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;"><span id="black">student</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;">fees Entry</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>
    <?php
    include('../include/dbconnection.php');

    $query  = mysqli_query($con, "SELECT * FROM application , selected WHERE application.appli_no=selected.appli_no AND selected.boys= 1;");

    ?>

    <div class="container-fluid mx-5">
        <div class="row">
            <div class="col-6 mx-auto py-5">
                <table class="table table-striped table-hover">
                    <thead>
                        <th>appli_no</th>
                        <th>date</th>
                        <th>name</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>

                        <?php
                        //if (mysqli_num_rows($query > 0) {
                        while ($row = mysqli_fetch_assoc($query)) {
                            $id = $row['appli_no'];
                        ?>

                            <tr>
                                <td>
                                    <?php echo $row['appli_no']; ?>
                                </td>
                                <td>
                                    <?php echo $row['date']; ?>
                                </td>
                                <td>
                                    <?php echo $row['SFName'] . ' ' . $row['SMName'] . ' ' . $row['SLName']; ?>
                                </td>
                                <td>
                                    <button class="btn" style="background-color: green;"><a href="student_update.php?no=<?php echo $row['appli_no']; ?>" style="color:white;">edit</button>
                                </td>
                                <td><button class="btn" style="background-color: red;"><a href="student_info.php?no=<?php echo $row['appli_no']; ?>" style="color:white;">Vacate</a></button></td>

                            </tr>
                        <?php }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
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