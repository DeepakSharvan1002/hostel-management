<?php

session_start();

if (!isset($_SESSION['id'])) {
    header('location: login.php');
    echo '<script>alert("Please login first")</script>';
}

$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        /* ----------------------  header  is   start  ---------------------- */
        #header {
            background-color: red;
            color: white;
            height: auto;
        }

        #header a {
            text-decoration: none;
            color: white;
        }

        #header #row {
            font-size: 150%;
        }

        #header .col-6 {
            font-weight: bolder;
            font-size: 150%;
        }

        #header .col-1 {
            margin-top: 0.5%;
        }

        #header button {
            width: 110%;
            height: 95%;
            background-color: black;
            margin-top: -10%;
            margin-left: -7%;
        }

        /* ----------------------header  is   end ---------------------- */

        /* ----------------------footer  is   start ---------------------- */
        #footer {
            background-color: red;
            text-align: center;
            font-weight: lighter;
            color: white;
            line-height: 95%;
            font-size: 75%;
            padding-bottom: 30%;
        }

        #footer p {
            letter-spacing: 8px;
        }

        /* ----------------------footer  is   end ---------------------- */


        /* ----------------------slide  is   start ---------------------- */

        #slidebar a {
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .btn-group-vertical {
            width: 100%;
            /* 103 */

        }

        #slidepad {
            padding: 0px 0px 15.1% 0px;
            background-color: rgb(1, 52, 255);
        }

        #slidebar #slidepad button {
            background-color: rgb(1, 52, 255) !important;
            padding: 6% 0%;
            font-size: 20px;
        }

        /* ----------------------slide  is   end ---------------------- */


        /* ----------------------slide  is   start ---------------------- */

        #slidebar a {
            color: white;
            text-decoration: none;
            text-align: center;
        }

        .btn-group-vertical {
            width: 100%;
            /* 103 */

        }

        #slidepad {
            padding: 0px 0px 15.1% 0px;
            background-color: rgb(1, 52, 255);
        }

        #slidebar #slidepad button {
            background-color: rgb(1, 52, 255);
            padding: 6% 0%;
            font-size: 20px;
        }

        #black {
            color: black;
        }

        /* ----------------------slide  is   end ---------------------- */
    </style>
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
                <div class="col-1" id="butten"><button><a href="logout.php">logout</a></button></div>
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
                    <button type="button" class="btn"><a href="fees.php">Fees</a></button>
                    <button type="button" class="btn"><a href="query.php">Query</a></button>
                    <button type="button" class="btn"><a href="pre_query.php"><span id="black">Previous Query</span></a></button>
                    <button type="button" class="btn"><a href="compliant.php">Compliant</a></button>
                </div>
            </div>

            
            <div class="col-10">
                <div class="container mt-5 mx-5">
                    <h1>Your previous query</h1>
                </div>
                <div class="container py-5">

                    <div class="col-7 mx-auto">
                            <?php
                            include('../include/dbconnection.php');
                            $query = mysqli_query($con,"SELECT * FROM query WHERE appli_no = '$id'");
                            if (mysqli_num_rows($query) > 0) {
                               while ($row= mysqli_fetch_assoc($query)) 
                               {
                                    ?>
                                        <div class="container py-3" >
                                        <div class="container-fluid" style="border-style: groove;">
                                        <div class="row">
                                        <div class="col-10 pt-2">
                                            <p><strong><?php echo $row['query'];?></strong></p>
                                            <div class="container-fluid" style="padding-left: 50px;text-indent:40px ;">
                                            <p><?php echo $row['ans']; ?></p></div></div>
                                        </div>
                                        </div></div>

                                <?php
                               }
                            }
                            else
                            {
                                echo "<strong>No previous query you didn't ask</strong>";
                            }
                            ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- ------------------- body of the content is start here -------------------->


    <!-- --------------------side   content  is   end---------------------->

    <!-- footer   of   the   page   -->
    <?php
include('../include/footer.php');
?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>