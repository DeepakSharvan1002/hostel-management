<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT BOYS HOSTEL</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/leave.css">
</head>

<body>

    <!--              header   of  the   page               -->
    <div class="container-fluid py-3 " id="header">
        <div class="container">
            <div class="row" id="row">
                <div class="col-6">BOYS HOSTEL</div>
                <div class="col-1"></div>
                <div class="col-1"></div>
                <div class="col-1"><a href="../index.php">Home</a></div>
                <div class="col-1"><a href="about.php" class="align-item-center">About</a></div>
                <div class="col-1"><a href="contact.php">Contact</a></div>
                <div class="col-1" id="butten"><button><a href="login.php">Login</a></button></div>
            </div>
        </div>
    </div>

    <!-- --------------------side   content  is   start---------------------->

    <div class="container-fluid" id="slidebar">
        <div class="row">
            <div class="col-3 border" id="slidepad">
                <div class="btn-group-vertical">
                    <button type="button" class="btn"><a href="dashboard.php">Dashboard</a></button>
                    <button type="button" class="btn"><a href="leave.php"><span id="black">Leave
                                Form</span></a></button>
                    <button type="button" class="btn"><a href="fees.php">Fees</a></button>
                    <button type="button" class="btn"><a href="report.php">Report</a></button>
                    <button type="button" class="btn"><a href="#">logout</a></button>
                </div>
            </div>
    <!-- --------------------side   content  is   end---------------------->


            <div class="col-9" id="content">
                <h2>Leave form</h2>
                <form action="/" method="post">

                    <div class="form-group row">
                        <label for="type_leave" class="col-sm-3 col-form-label">Type of leave</label>
                        <div class="col-sm-3">
                            <input type="radio" class="form-check-label" id="type_leave" name="type_leave" />
                            <label class="form-check-label" for="radio1" id="nobold">medical</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="radio" class="form-check-label"  id="type_leave" name="type_leave" />
                            <label class="form-check-label" for="radio1" id="nobold">special</label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="from" class="col-sm-2 col-form-label">From</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="from" name="from" type="date" placeholder="MM/DD/YYY" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="to" class="col-sm-2 col-form-label">to</label>
                        <div class="col-sm-4">
                            <input class="form-control" id="to" name="to" type="date" placeholder="MM/DD/YYY" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="reason" class="col-sm-2 col-form-label" id="rea">Reason</label>
                        <div class="col-sm-9">
                            <input class="form-control" id="reason" name="reason" type="text" placeholder="Enter the reason here.." />
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                          <input type="submit" class="form-control"  name="submit" id="submit"/>
                        </div>
                      </div>
                </form>


            </div>
        </div>
    </div>



    <!-- ------------------ footer   of   the   page  --------------- -->
    <div class="container-fluid p-2" id="footer">
        <p>COPY@RIGHTS<BR>BOY HOSTEL</p>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>