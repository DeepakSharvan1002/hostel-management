<?php

session_start();

include('dbconnection.php');

    $sql = mysqli_query($con, "insert into application (SFName,smname,SLName,FFName,FMName,FLName,dob,house_no,
    area,street,state,district,pincode,Sphone,Fphone,email,status,religious,
    caste,nationality,aadhar)  values ('$SFName','$SMName','$SLName','
    $FFName','$FMName','$FLName','$dob','$house_no','$area','$street','$state','$district',
    '$pincode','$Sphone','$Fphone','$email','$status','$religious','$caste','$nationality',
    '$aadhar')");

?>