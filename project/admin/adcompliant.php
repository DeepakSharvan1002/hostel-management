

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
    <title>ABOUT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
.black{
    color:black;
}
    </style>


</head>
<body>

     <!--              header   of  the   page               -->
<?php
include('../include/adheader.php');
?>

<div class="container-fluid py-1 border " style="background-color:#0d6efd;">
        <div class="d-flex justify-content-center">
            <div class="btn-group">
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='applicant.php'" style="border-radius:0rem;">Application</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;">student</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;">fees Entry</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;"><span id="black">Complaint</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>

    <div class="container-fluid pt-5">
        <div class="d-flex justify-content-left mx-5">
            <h2>Compliant</h2>
        </div>
    </div>

<div class="container my-5">
<table class="table table-hover">
    <thead>
        <th>appli_no</th>
        <th>Compliant</th>
        <th>status</th>
    </thead>
    <tbody>
        <?php
        include('../include/dbconnection.php');
            $query  = mysqli_query($con,'select * from compliant');
            if (mysqli_num_rows($query) > 0) {
                while ($row = mysqli_fetch_assoc($query))
                {
                    $id =  $row['appli_no'];
                    $compliant = $row['compliant'];
                    ?>

                <tr>
                    <td><?php echo $row['appli_no']; ?></td>
                    <td><?php echo $row['compliant']; ?></td>
                    <td><?php echo $row['type_c']; ?></td>
                </tr>

            <?php    }
            }
        ?>
    </tbody>
</table>
</div>


<!-- footer   of   the   page   -->
<?php
include('../include/footer.php');
?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
