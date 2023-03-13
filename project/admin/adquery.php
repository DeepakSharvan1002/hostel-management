

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
        /* ----------------------  header  is   start  ---------------------- */
#header{
    background-color: red;
    color: white;
    height: auto;
}

/* ----------------------header  is   end ---------------------- */

/* ----------------------  admin   portal  start---------------------- */
#title{
    text-align: center;
}
#title h3{
    font-size: 200%;
    font-weight: bolder;
}

/* ----------------------  admin   portal  end---------------------- */

/* ----------------------footer  is   start ---------------------- */
#footer{
    background-color: red;
    text-align: center;
    font-weight: lighter;
    color: white;
    line-height: 95%;
    font-size: 75%;
}
#footer p{
    letter-spacing: 8px;
    text-align: center;
}

/* ----------------------footer  is   end ---------------------- */

a{
    text-decoration: none;
    
}
.black{
    color:black;
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
                <button type="button" class="btn mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;"><span id="black">Query</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>

<div class="container my-5">
    <table class="table table-hover">
        <tr>
            <th>appli_no</th>
            <th>query</th>
            <th>status</th>
        </tr>
        
            <?php  
                include('../include/dbconnection.php');
                $query = mysqli_query($con,"SELECT * FROM query");
                if (mysqli_num_rows($query) > 0) {
                    while ($row = mysqli_fetch_assoc($query)) {
                        ?>
                        <tr>
                        <td><?php echo $row['appli_no']; ?></td>
                        <td>
                            <a href="query_reply.php?query=<?php echo $row['query']; ?>">
                            <?php echo $row['query']; ?></a></td>


                        <td><?php 
                        if($row['status'] == 0)
                        {
                            echo '<div class="circle" style = "height:20px; width:20px;background-color:red;border-radius:50px;border-style:none;"></div>';
                        }
                        elseif ($row['status'] == 1) {
                            echo '<div class="circle" style = "height:20px; width:20px;background-color:green;border-radius:50px;border-style:none;"></div>';
                        }
                        ?></td>
                        </tr>
                        <?php
                    }
                }
                else{
                    echo '<script>alert("there is no query")</script>';
                }
            ?>
            
        
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
