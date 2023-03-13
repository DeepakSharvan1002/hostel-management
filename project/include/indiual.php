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
#header a{
    text-decoration: none;
    color: white;
}
#header #row{
    font-size: 150%;
}
#header .col-6{
    font-weight: bolder;
    font-size:150% ;
}
#header .col-2{
    margin-top:0.6%;
    text-align: center;
}
#header button{
    width: 95%;
    height: 95%;
    background-color: black;
    margin-top: -10%;
    margin-left:-7%;
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
}

/* ----------------------footer  is   end ---------------------- */

input{
    width: 90%;
    font-weight: bold;
}

    </style>
</head>

<body>
    <!--              header   of  the   page               -->
    <div class="container-fluid py-3 " id="header">
    <div class="container">
        <div class="row" id="row">
            <div class="col-4" style="font-weight:bold; font-size:150%;"><a href="../index.php" style="color:white;">BOYS HOSTEL</a></div>
            <div class="col-5"></div>
            <div class="col-3" style="font-weight:bold; font-size:150%;">ADMIN PORTAL</div>
        </div>
    </div>
</div>

<div class="container-fluid py-1 border " style="background-color:#0d6efd;">
        <div class="d-flex justify-content-center">
            <div class="btn-group">
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/applicant.php'" style="border-radius:0rem;">Application</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/stud_details.php'" style="border-radius:0rem;">student</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/fees_entry.php'" style="border-radius:0rem;">fees Entry</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/adleave.php'" style="border-radius:0rem;">Leave</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../admin/adreport.php'" style="border-radius:0rem;">Report</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>


    <div class="contaier pt-5">
        <?php
        if (isset($_GET['appli_no'])) 
        {
            $id = $_GET['appli_no'];
            $val = $id;
            include('dbconnection.php');
            $query = "select * from application where appli_no='$val'";

            $result = mysqli_query($con, $query);
            while ($row = mysqli_fetch_assoc($result)) 
            { 
                
                
        $appli_no = $row['appli_no']; 
        $name = $row['SFName'].' '. $row['SMName'].' '.$row['SLName'];
        
        ?>
                <div class="container" style="width: 50%; margin-bottom: 80px;">
                <table class="table table-striped">
                <tr>
                        <th>Appli no</th>
                        <td><?php echo $row['appli_no']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $row['SFName'].' '. $row['SMName'].' '.$row['SLName']; ?></td>
                    </tr>
                    <tr>
                        <th>Father name</th>
                        <td><?php echo $row['FFName'].' '. $row['FMName'].' '.$row['FLName']; ?></td>
                    </tr>
                    <tr>
                        <th>DOB</th>
                        <td><?php echo $row['dob']; ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $row['house_no'].'<br>'. $row['area'].'<br>'. $row['street']; ?></td>
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
                    <tr>
                        <form action="" method="post">
                        <td><input type="submit" name="reject" value="Reject" style="background-color:red;"></td>
                        <td><input type="submit" name="Aprove" value="Aprove" style="background-color:green;"></td>
                        </form>
                    </tr>
                </table>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <!-- footer   of   the   page   -->
    <?php
include('footer.php');
?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>



        <?php

date_default_timezone_set('asia/kolkata');
$date = date('Y-m-d');

        if(isset($_POST['Aprove'])){
            
                $select=mysqli_query($con,"insert into selected (appli_no,date,boys) value ('$id','$date',1)");
                echo '<script>alert("approved sucessfull")</script>';
                echo '<script>window.location="../admin/applicant.php";</script>';
                include('dbfees.php');
                mysqli_query($confees,"insert into student_fees (appli_no,date,name) values ('$appli_no','$date','$name')");
        }
        
        elseif (isset($_POST['reject'])){
            $select=mysqli_query($con,"insert into selected (appli_no,date,boys) value ('$id','$date',0)");
                echo '<script>alert("rejected sucessfull")</script>';
                echo '<script>window.location="../admin/applicant.php";</script>';
        }

?>