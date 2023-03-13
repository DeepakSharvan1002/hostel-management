<?php
include('../include/dbconnection.php');
if (isset($_POST['submit'])) {
  global $ans;
  $reg_no = $_POST['user_id'];
  $pass = $_POST['pass'];
  $conpass = $_POST['conpass'];
  $query2 = "select * from selected where appli_no = '$reg_no' and boys = 1";
  $result = mysqli_query($con, $query2);
  while ($row = mysqli_fetch_assoc($result)) {
    $ans = $row['appli_no'];
  }
  if ($reg_no == $ans) {
    if ($pass == $conpass) {
      mysqli_query($con,"insert into pass (appli_no,pass) value ('$reg_no','$pass')");
      header('locaton: login.php');
    } else {
      echo '<script>alert ("pass is not matched")</script>';
    }
  } else {
    echo '<script>alert ("Incorrect or not selected user id ")</script>';
  }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PASSWORD BOYS HOSTEL</title>
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
      margin-top: 10.2%;
    }

    #footer p {
      letter-spacing: 8px;
    }

    /* ----------------------footer  is   end ---------------------- */

    /* --------------------login  content  is   start ------------------------- */
    .form-group {
      padding-top: 2%;
      padding-bottom: 2%;
    }

    #form {
      margin-top: 10%;
      padding: 48px 75px;
      font-size: x-large;
    }

    #form input {
      border-style: solid;
    }

    #form_content {
      background-color: red;
    }

    /* --------------------login  content  is   end ------------------------- */
  </style>
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
        <div class="col-1" id="butten"><button><a href="login.php">Login</a></button></div>
      </div>
    </div>
  </div>

  <!-- -----------------------  login  content  is  start ------------------------ -->
  <div class="container pt-5" id="form" >
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6" id="form_content">

        <form method="post">

          <!-- -------------------  User id   --------------------- -->
          <div class="form-group row">
            <label for="id" class="col-sm-4 col-form-label">User id</label>
            <div class="col-sm-8">
              <input type="varchar" class="form-control" id="id" name="user_id" placeholder="user id" maxlength="7"
                required />
            </div>
          </div>

          <!-- -------------------  Password   --------------------- -->
          <div class="form-group row">
            <label for="pass" class="col-sm-4 col-form-label"> Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="password" minlength="8"
                required />
            </div>
          </div>

          <!-- -------------------  Password   --------------------- -->
          <div class="form-group row">
            <label for="conpass" class="col-sm-4 col-form-label">Confirm Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="conpass" name="conpass" placeholder="password"
                minlength="8" required />
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-12">
              <input type="submit" class="form-control" name="submit" id="submit" />
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>

  <!-- -----------------------  login  content  is  end ------------------------ -->

  <!-- footer   of   the   page   -->
  <?php
include('../include/footer.php');
?>
  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
