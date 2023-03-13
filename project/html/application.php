<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABOUT BOYS HOSTEL</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/application.css">

</head>

<body>

  <!--              header   of  the   page               -->
  <div class="container-fluid py-3 " id="header">
    <div class="container">
      <div class="row" id="row">
        <div class="col-6"><a href="../index.php" style="color:white;">BOYS HOSTEL</a></div>
        <div class="col-1"></div>
        <div class="col-1"></div>
        <div class="col-1"><a href="../index.php">Home</a></div>
        <div class="col-1"><a href="about.php" class="align-item-center">About</a></div>
        <div class="col-1"><a href="contact.php">Contact</a></div>
        <div class="col-1"><a href="login.php">Login</a></div>
      </div>
    </div>
  </div>

  <!-- ------------------headind of  application  is start ---------------------- -->
  <div class="container-fluid pt-5" style="text-align: center;">
    <h1>HOSTEL APPLICATION FOR NEW MEMBER</h1>
  </div>

  <!-- ------------------headind of  application  is end ---------------------- -->

  <!-- ------------------contant  of  application  is start ---------------------- -->

  <div class="container pt-5" id="form">
    <div class="row">
      <div class="col-8 mx-auto">
        <div class="card">
          <div class="card-body">
            <form method="post">

              <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="name" name="sfname" placeholder="ur name"  autocomplete="off" required>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="name" name="smname" placeholder="middle name"  autocomplete="off">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="name" name="slname" placeholder="last name"  autocomplete="off" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="f-name" class="col-sm-2 col-form-label">father name</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="f-name" name="ffname" placeholder="ur name"   autocomplete="off" required>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="f-name" name="fmname" placeholder="middle name"   autocomplete="off">
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="f-name" name="flname" placeholder="last name"   autocomplete="off" required>
                </div>
              </div>

              <!-- -------------------  date of birth   --------------------- -->
              <div class="form-group row">
                <label for="dob" class="col-sm-2 col-form-label">Date of birth</label>
                <div class="col-sm-3">
                  <input class="form-control" id="dob" name="date" type="date" placeholder="MM/DD/YYY" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  house number   --------------------- -->
              <div class="form-group row">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm py-1">
                  <input type="text" class="form-control" id="address" name="house_no"
                    placeholder="House number/building number" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  area   --------------------- -->
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm py-1">
                  <input type="text" class="form-control" id="address" name="area" placeholder="Area" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  street   --------------------- -->
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm py-1">
                  <input type="text" class="form-control" id="address" name="Street" placeholder="Street" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  state   --------------------- -->
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm py-1">
                  <input type="text" class="form-control" id="address" name="district" placeholder="district"   autocomplete="off"/>
                </div>
              </div>

              <!-- -------------------  district   --------------------- -->
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm py-1">
                  <input type="text" class="form-control" id="address" name="state" placeholder="State" autocomplete="off"
                    required />
                </div>
              </div>

              <!-- -------------------  pin   --------------------- -->
              <div class="form-group row">
                <div class="col-sm-2"></div>
                <div class="col-sm py-1">
                  <input type="tel" class="form-control" id="address" name="pin" placeholder="Pin" pattern="[0-9]{6}"
                    maxlength="6" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  phone number   --------------------- -->
              <div class="form-group row">
                <label for="stud_number" class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-3">
                  <input type="tel" class="form-control" id="stud_number" name="phone" placeholder="98--- ---89"
                    pattern="[6-9]{1}[0-9]{9}" maxlength="10" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  father number   --------------------- -->
              <div class="form-group row">
                <label for="father_number" class="col-sm-2 col-form-label">Father number</label>
                <div class="col-sm-3">
                  <input type="tel" class="form-control" id="father_number" name="fphone" placeholder="98--- ---89"
                    pattern="[6-9]{1}[0-9]{9}" maxlength="10" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  Email id   --------------------- -->
              <div class="form-group row">
                <label for="mail" class="col-sm-2 col-form-label">Mail address</label>
                <div class="col-sm-3">
                  <input type="email" class="form-control" id="mail" name="mail" placeholder="abc@mail.com" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  status   --------------------- -->
              <div class="form-group row">
                <label for="status" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-2">
                  <input type="radio" class="form-check-label" id="status" name="status" value="single" required />
                  <label class="form-check-label" for="radio1" id="nobold">single</label>
                </div>
                <div class="col-sm-2">
                  <input type="radio" class="form-check-label" id="status" name="status" value="Married" required />
                  <label class="form-check-label" for="radio1" id="nobold">Married</label>
                </div>
              </div>

              <!-- -------------------  Religious   --------------------- -->
              <div class="form-group row">
                <label for="religious" class="col-sm-2 col-form-label">Religious</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="religious" name="religious" placeholder="Religious" autocomplete="off"
                    required />
                </div>
              </div>

              <!-- -------------------  caste   --------------------- -->
              <div class="form-group row">
                <label for="caste" class="col-sm-2 col-form-label">caste</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="caste" name="caste" placeholder="Caste" autocomplete="off" required />
                </div>
              </div>

              <!-- -------------------  nationality   --------------------- -->
              <div class="form-group row">
                <label for="nationality" class="col-sm-2 col-form-label">nationality</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="nationality" name="nationality" placeholder="nationality" autocomplete="off"
                    required />
                </div>
              </div>

              <!-- -------------------  Aadhar no.   --------------------- -->
              <div class="form-group row">
                <label for="Aadhar no." class="col-sm-2 col-form-label">Aadhar no.</label>
                <div class="col-sm-3">
                  <input type="tel" class="form-control" id="Aadhar no." name="aadhar" placeholder="---- ---- ----"
                    pattern="[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}" maxlength="12" autocomplete="off" required />
                </div>
              </div>

              <div class="form-group row">
                <div class="col-sm-12">
                  <input type="submit" class="form-control" value="submit" id="submit" name="submit" />
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ------------------contant of  application  is end ---------------------- -->

  <div class="container" id="note">
    <div class="col mx-auto">
      <h4>*Notes</h4>
      <p>After the applicatiion applied , Kindly wait for one working days. Our hostel management make a call or msg or email
        to
        confirm your application .
      </p>
    </div>
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
date_default_timezone_set('asia/kolkata');
$date = date('Y-m-d');
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

  $sql = mysqli_query($con, "insert into application (date,SFName,smname,SLName,FFName,FMName,FLName,dob,house_no,
area,street,state,district,pincode,Sphone,Fphone,email,status,religious,
caste,nationality,aadhar)  values ('$date','$SFName','$SMName','$SLName','
$FFName','$FMName','$FLName','$dob','$house_no','$area','$street','$state','$district',
'$pincode',$Sphone,$Fphone,'$email','$status','$religious','$caste','$nationality',
$aadhar)");

  echo '<script>alert("succcessfull")</script>';
}

?>

</html>