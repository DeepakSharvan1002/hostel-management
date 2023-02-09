<?php


$server = "localhost";
$id = "root";
$db = "boys_hostel";
$con = mysqli_connect($server, $id, '', $db);

if (mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}

// if(!isset($_POST['sfname']))
// {
//     header('location;../html/application.php');
// }
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
$aadhar = '';
if(isset($_POST['aadhar'])){
$aadhar = $_POST['aadhar'];
}





?>

<html>

<head>
    <title>check your application</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(rgb(28, 173, 240), rgb(43, 181, 245), rgb(44, 181, 244),
                    rgb(62, 182, 238), rgb(99, 195, 239), rgb(140, 211, 244), rgb(167, 217, 239), rgb(176, 210, 226));
            opacity: 0.8;
        }

        table {
            font-size: large;
            background-color: azure;
            box-shadow: inset;
        }
        table th , td {
            border-style: none;
        }

        h2 {
            padding: 0% 35%;
            font-style: italic;
            font-size: 210%;
            font-weight: 500;
        }

        #btn1 {
            width: 100%;
            height: 6%;
            background-color: red;
            border: none;
            border-radius: 30px;
            font-size: 20px;
            font-weight: 600;
            color: white;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h2>Check your form</h2>
                <!-- <div class="card">
                        <div class="card-body"> -->
                <div class="col-6 mx-auto">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>name</th>
                                <td>
                                    <?php echo $SFName, ' ', $SMName, ' ', $SLName; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Father name</th>
                                <td>
                                    <?php echo $FFName, ' ', $FMName, ' ', $FLName; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Date of birth</th>
                                <td>
                                    <?php echo $dob; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>
                                    <?php echo $house_no, '<br>', $area, '<br>', $street, '<br>', $state, '<br>', $district, '<br>', $pincode; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>
                                    <?php echo $Sphone; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Father number</th>
                                <td>
                                    <?php echo $Fphone; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>email id </th>
                                <td>
                                    <?php echo $email; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <?php echo $status; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>Religious</th>
                                <td>
                                    <?php echo $religious; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>caste</th>
                                <td>
                                    <?php echo $caste; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>nationality</th>
                                <td>
                                    <?php echo $nationality; ?>
                                </td>
                            </tr>

                            <tr>
                                <th>Aadhar</th>
                                <td>
                                    <?php echo $aadhar; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <form method="POST">
                        <input type="submit" name="Comfirm" value="Comfirm" id="btn1">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>


</html>
<?php

if (isset($_POST['Comfirm'])) {

    $sql = mysqli_query($con, "insert into application (SFName,smname,SLName,FFName,FMName,FLName,dob,house_no,
area,street,state,district,pincode,Sphone,Fphone,email,status,religious,
caste,nationality,aadhar)  values ('$SFName','$SMName','$SLName','
$FFName','$FMName','$FLName','$dob','$house_no','$area','$street','$state','$district',
'$pincode','$Sphone','$Fphone','$email','$status','$religious','$caste','$nationality',
'$aadhar')");
    echo $aadhar;
   
}

?>