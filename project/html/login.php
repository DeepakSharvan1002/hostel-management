<?php

session_start();
global $ans;
global $p_ans;

if (isset($_POST['submit'])) {
  include('../include/dbconnection.php');

  $id = $_POST['user_id'];
  $pass = $_POST['pass'];

  $result = mysqli_query($con, "SELECT * FROM pass WHERE appli_no = '$id'");
  while ($row = mysqli_fetch_assoc($result)) {
    $ans = $row['appli_no'];
    $p_ans = $row['pass'];
  }

    if ($id == $ans) {
      if ($pass == 'BH2@23') {
        $_SESSION["id"] =  $id;
        $_SESSION['start_time'] = time();
        header('location:../admin/applicant.php');
        echo 'enter dashboard';
      } 
      elseif ($pass == $p_ans && $pass != 'BH2@23') {
        // if($pass == $p_ans){
        $_SESSION["id"] =  $id;
        $_SESSION['start_time'] = time();
        header('location: dashboard.php');
        // }
      } else {
        echo '<script>alert ("password is worng")</script>';
      }
    } else {
       echo '<script>alert ("incorrect user id")</script>';
    }
  
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN BOYS HOSTEL</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/login.css">
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
        <div class="col-1" id="butten"><button><a href="login.php">Login</a></button></div>
      </div>
    </div>
  </div>

  <!-- -----------------------  login  content  is  start ------------------------ -->
  <div class="container pt-5" id="form">
    <div class="row">
      <div class="col-3"></div>
      <div class="col-6" id="form_content">

        <form method="post">

          <!-- -------------------  User id   --------------------- -->
          <div class="form-group row">
            <label for="id" class="col-sm-4 col-form-label">User id</label>
            <div class="col-sm-8">
              <input class="form-control" id="id" name="user_id" placeholder="user id" />
            </div>
          </div>

          <!-- -------------------  Password   --------------------- -->
          <div class="form-group row">
            <label for="pass" class="col-sm-4 col-form-label">Password</label>
            <div class="col-sm-8">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="password" />
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