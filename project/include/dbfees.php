<?php
$confees = mysqli_connect("localhost", "root", "", "fees");
if (mysqli_connect_errno()) {
  echo "Connection Fail" . mysqli_connect_error();
}
