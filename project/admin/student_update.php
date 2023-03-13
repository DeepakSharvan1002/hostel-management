<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: ../html/login.php');
}
include('../include/dbconnection.php');
if (isset($_GET['no'])) {
    $stud_id = $_GET['no'];
}

global $stud_id;

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
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='stud_details.php'" style="border-radius:0rem;"><span id="black">student</span></button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_entry.php'" style="border-radius:0rem;">fees Entry</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='fees_details.php'" style="border-radius:0rem;">fees</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adquery.php'" style="border-radius:0rem;">Query</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adcompliant.php'" style="border-radius:0rem;">Complaint</button>
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='adleave.php'" style="border-radius:0rem;">Leave</button> 
                <button type="button" class="btn btn-primary mx-3" onclick="window.location.href='../html/logout.php'" style="border-radius:0rem;">logout</button>
            </div>
        </div>
    </div>


    <div class="container-fluid mx-5">
        <?php
        include('../include/dbconnection.php');
        $query = mysqli_query($con, "SELECT * FROM application WHERE appli_no = $stud_id");
        while ($row = mysqli_fetch_assoc($query)) {
        ?>
            <form method="post" class="col-6 mx-auto py-5">

            <div class="form-group row">
                    <label for="dob" class="col-sm-2 col-form-label">Appli no. </label>
                    <label for="dob" class="col-sm-2 col-form-label"><?php  echo $row['appli_no']; ?></label>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="sfname" placeholder="ur name" autocomplete="off" required value="<?php  echo $row['SFName']; ?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="smname" placeholder="middle name" autocomplete="off" value="<?php  echo $row['SMName']; ?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="name" name="slname" placeholder="last name" autocomplete="off" required value="<?php  echo $row['SLName']; ?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="f-name" class="col-sm-2 col-form-label">father name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="f-name" name="ffname" placeholder="ur name" autocomplete="off" required value="<?php  echo $row['FFName']; ?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="f-name" name="fmname" placeholder="middle name" autocomplete="off" value="<?php  echo $row['FMName']; ?>">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="f-name" name="flname" placeholder="last name" autocomplete="off" required
                        value="<?php  echo $row['FLName']; ?>">
                    </div>
                </div>

                <!-- -------------------  date of birth   --------------------- -->
                <div class="form-group row">
                    <label for="dob" class="col-sm-2 col-form-label">Date of birth</label>
                    <div class="col-sm-3">
                        <input class="form-control" id="dob" name="date" type="date" placeholder="MM/DD/YYY" autocomplete="off" required value="<?php echo $row['dob']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  house number   --------------------- -->
                <div class="form-group row">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm py-1">
                        <input type="text" class="form-control" id="address" name="house_no" placeholder="House number/building number" autocomplete="off" required value="<?php echo $row['house_no']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  area   --------------------- -->
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm py-1">
                        <input type="text" class="form-control" id="address" name="area" placeholder="Area" autocomplete="off" required value="<?php echo $row['area']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  street   --------------------- -->
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm py-1">
                        <input type="text" class="form-control" id="address" name="Street" placeholder="Street" autocomplete="off" required value="<?php echo $row['street']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  state   --------------------- -->
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm py-1">
                        <input type="text" class="form-control" id="address" name="district" placeholder="district" autocomplete="off" value="<?php echo $row['state']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  district   --------------------- -->
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm py-1">
                        <input type="text" class="form-control" id="address" name="state" placeholder="State" autocomplete="off" required value="<?php echo $row['district']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  pin   --------------------- -->
                <div class="form-group row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm py-1">
                        <input type="tel" class="form-control" id="address" name="pin" placeholder="Pin" pattern="[0-9]{6}" maxlength="6" autocomplete="off" required value="<?php echo $row['pincode']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  phone number   --------------------- -->
                <div class="form-group row">
                    <label for="stud_number" class="col-sm-2 col-form-label">Phone number</label>
                    <div class="col-sm-3">
                        <input type="tel" class="form-control" id="stud_number" name="phone" placeholder="98--- ---89" pattern="[6-9]{1}[0-9]{9}" maxlength="10" autocomplete="off" required value="<?php echo $row['Sphone']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  father number   --------------------- -->
                <div class="form-group row">
                    <label for="father_number" class="col-sm-2 col-form-label">Father number</label>
                    <div class="col-sm-3">
                        <input type="tel" class="form-control" id="father_number" name="fphone" placeholder="98--- ---89" pattern="[6-9]{1}[0-9]{9}" maxlength="10" autocomplete="off" required value="<?php echo $row['Fphone']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  Email id   --------------------- -->
                <div class="form-group row">
                    <label for="mail" class="col-sm-2 col-form-label">Mail address</label>
                    <div class="col-sm-3">
                        <input type="email" class="form-control" id="mail" name="mail" placeholder="abc@mail.com" autocomplete="off" required value="<?php echo $row['email']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  status   --------------------- -->
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-2">
                        <input type="radio" class="form-check-label" id="status" name="status" value="single" required <?php
                        if ($row['status'] == 'single') {
                            echo 'checked = "checked"';
                        }
                        ?>/>
                        <label class="form-check-label" for="radio1" id="nobold">single</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="radio" class="form-check-label" id="status" name="status" value="Married" required <?php
                        if ($row['status'] == 'Married') {
                            echo 'checked = "checked"';
                        }
                        ?>/>
                        <label class="form-check-label" for="radio1" id="nobold">Married</label>
                    </div>
                </div>

                <!-- -------------------  Religious   --------------------- -->
                <div class="form-group row">
                    <label for="religious" class="col-sm-2 col-form-label">Religious</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="religious" name="religious" placeholder="Religious" autocomplete="off" required value="<?php echo $row['religious']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  caste   --------------------- -->
                <div class="form-group row">
                    <label for="caste" class="col-sm-2 col-form-label">caste</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="caste" name="caste" placeholder="Caste" autocomplete="off" required value="<?php echo $row['caste']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  nationality   --------------------- -->
                <div class="form-group row">
                    <label for="nationality" class="col-sm-2 col-form-label">nationality</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="nationality" name="nationality" placeholder="nationality" autocomplete="off" required value="<?php echo $row['nationality']; ?>"/>
                    </div>
                </div>

                <!-- -------------------  Aadhar no.   --------------------- -->
                <div class="form-group row">
                    <label for="Aadhar no." class="col-sm-2 col-form-label">Aadhar no.</label>
                    <div class="col-sm-3">
                        <input type="tel" class="form-control" id="Aadhar no." name="aadhar" placeholder="---- ---- ----" pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}" maxlength="12" autocomplete="off" required value="<?php echo $row['aadhar']; ?>"/>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <input type="submit" class="form-control" value="submit" id="submit" name="submit" style="background-color: red;color:white;"/>
                    </div>
                </div>

            </form>
        <?php

        }
        ?>
    </div>



    <!-- footer   of   the   page   -->
    <?php
    include('../include/footer.php');
    ?>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

<?php
include('../include/dbconnection.php');
if (isset($_POST['submit'])) {
  $SFName = $_POST['sfname'];
  $SMName = $_POST['smname'];
  $SLName = $_POST['slname'];
  $FFName = $_POST['ffname'];
  $FMName = $_POST['fmname'];
  $FLName = $_POST['flname'];
  $dob = $_POST['date'];
  $house_no = $_POST['house_no'];
  $area = $_POST['area'];
  $street = $_POST['Street'];
  $state = $_POST['state'];
  $district = $_POST['district'];
  $pincode = $_POST['pin'];
  $Sphone = $_POST['phone'];
  $Fphone = $_POST['fphone'];
  $email = $_POST['mail'];
  $status = $_POST['status'];
  $religious = $_POST['religious'];
  $caste = $_POST['caste'];
  $nationality = $_POST['nationality'];
  $aadhar = $_POST['aadhar'];

  echo $stud_id;
  $sql = mysqli_query($con, "UPDATE application SET SFName='$SFName'WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET SMName='$SMName' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET SLName= '$SLName' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET FFName='$FFName' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET FFName='$FFName' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET FMName='$FMName' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET FLName='$FLName' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET dob='$dob' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET house_no='$house_no' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET area='$area' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET street='$street' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET state='$state' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET district='$district' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET pincode='$pincode' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET Sphone = '$Sphone' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET Fphone = '$Fphone' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET email='$email' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET status='$status' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET religious='$religious' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET caste='$caste' WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET nationality='$nationality'WHERE appli_no = '$stud_id' ");

  $sql = mysqli_query($con, "UPDATE application SET aadhar='$aadhar' WHERE appli_no = '$stud_id' ");

  ?>
<script>
window.location="student_update.php?no=<?php echo $stud_id; ?>";
    </script>
  <?php
}

?>

</html>