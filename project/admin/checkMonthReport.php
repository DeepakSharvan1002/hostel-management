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
    <title>ABOUT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        /* ----------------------  header  is   start  ---------------------- */
        #header {
            background-color: red;
            color: white;
            height: auto;
        }

        /* ----------------------header  is   end ---------------------- */

        /* ----------------------  admin   portal  start---------------------- */
        #title {
            text-align: center;
        }

        #title h3 {
            font-size: 200%;
            font-weight: bolder;
        }

        /* ----------------------  admin   portal  end---------------------- */

        /* ----------------------footer  is   start ---------------------- */
        #footer {
            background-color: red;
            text-align: center;
            font-weight: lighter;
            color: white;
            line-height: 95%;
            font-size: 75%;
        }

        #footer p {
            letter-spacing: 8px;
            text-align: center;
        }

        /* ----------------------footer  is   end ---------------------- */

        a {
            text-decoration: none;

        }

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
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button>
                <button type="button" class="btn mx-3" onclick="window.location.href='adreport.php'" style="border-radius:0rem;"><span id="black">Report</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>


    <div class="container pt-2">
        <div class="col-6 mx-auto">
        <form  method="post">
    <div class="input-group">
    <select name="month" id="month" class="form-control" required>
            <option value="">--- select month ---</option>
            <?php
            include('../include/dbfees.php');
            $query = mysqli_query($confees, "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA = 'fees' ORDER BY STR_TO_DATE(CONCAT('0001 ', TABLE_NAME, ' 01'), '%Y %M %d')");
            $row = mysqli_fetch_all($query, MYSQLI_ASSOC);
            foreach ($row as $option) { ?>
                <?php if ($option['TABLE_NAME'] != 'student_fees') 
                { ?>
                    <option value="<?php echo $option['TABLE_NAME']; ?>">
                    <?php
                    echo $option['TABLE_NAME'];
                }
                    ?>
                    </option>
                <?php
            } ?>
        </select>
  <input type="submit" name = "submit" class="input-group-text" id="basic-addon2" value="sbmit">
  </form>
</div>

<?php
if(isset($_POST['submit']))
{
    $search_mon = $_POST['month'];
    echo $search_mon;
}
?>
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

