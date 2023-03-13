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
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>

    <?php
    if (isset($_GET['query'])) {
        $query = $_GET['query'];
    }
    ?>

    <div class="container py-5">
        <div class="col-7 mx-auto py-3">
            <div class="row">
                <div class="col-2"><strong>Query</strong></div>
                <div class="col mx-3 border mx-auto py-3">
                    <?php echo '<p>';
                    echo $query;
                    echo '</p>';
                    ?>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-2"><strong>Reply</strong></div>
                <div class="col mx-3 mx-auto ">
                    <form action="" method="post">
                        <textarea name="ans" id="" rows="15" style="border-style: normal;width:100%"></textarea>
                        <div class="d-flex justify-content-end">
                        <input name="submit"type="submit" value="submit" style="color:white; background-color:red;border-style:none;font-size:larger;"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['submit'])) {
            $ans = $_POST['ans'];
            include('../include/dbconnection.php');

            $query = mysqli_query($con,"UPDATE query SET ans='$ans' , status=1 WHERE query = '$query'");
            echo '<script>alert("answer successfully sended")</script>';
            echo '<script>window.location="adquery.php"</script>';
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