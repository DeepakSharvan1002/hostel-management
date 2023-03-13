<?php
if (isset($_GET['appli_no'])) {
    $id = $_GET['appli_no'];
    $date = date('Y-m-d');
    include('../include/dbconnection.php');
    include('../include/dbfees.php');

    mysqli_query($con,"INSERT INTO left_student SELECT * FROM application WHERE appli_no = $id");
    mysqli_query($con,"UPDATE left_student SET date = '$date' WHERE appli_no = '$id' ");
    mysqli_query($con,"UPDATE selected SET boys = 2 WHERE appli_no = '$id' ");
    mysqli_query($con,"DELETE FROM application WHERE appli_no='$id'");
    mysqli_query($con,"DELETE FROM compliant WHERE appli_no='$id'");
    mysqli_query($con,"DELETE FROM query WHERE appli_no='$id'");
    mysqli_query($con,"DELETE FROM pass WHERE appli_no='$id'");
    mysqli_query($confees,"DELETE FROM 	student_fees WHERE appli_no='$id'");
    mysqli_query($con,"DELETE FROM leaveform WHERE appli_no='$id'");
    echo '<script>alert("lefted successfully")</script>';
    header('location:stud_details.php');
}
?>
