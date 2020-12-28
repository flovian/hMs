<!Doctype html>
<?php include ("function.php")?>
<html lang="en">
<head>
    <title>Admin Panel</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="Bootstrap/js/jquery.min.js.txt"></script>
    <script src="Bootstrap/js/popper.min.js.txt"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a href="#" class="navbar navbar-brand">
            <b class="fa fa-user-plus" aria-hidden="true">e-Hospital</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"></a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="doctorsLogin.php" class="nav-link">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>Doctor's Panel</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"></a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="adminLogin.php" class="nav-link">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"></a>
                </li>
            </ul>
        </div>
    </nav>

</head>
<body>
<?php require_once 'function.php'; ?>

<div class="container">
    <div class="jumbotron" style="background:url('images/doc3.jpg');
no-repeat;background-size:cover;height:250PX;"></div>
    <div class="row">
        <div class="col-3">
            <div class="tab-content" id="tab-content">
                <div class="list-group" id="list-tab" role="tablist">
                    <a  class="list-group-item list-group-item active" id="list-appointment-list" data-toggle="list" href="#list-appointment">Appointment</a>
                    <a  class="list-group-item list-group-item action" id="list-patients-list" data-toggle="list" href="#list-patient">Patient</a>
                    <a  class="list-group-item list-group-item action" id="list-doctors-list" data-toggle="list" href="#list-doctors">Doctors Section</a>
                    <a  class="list-group-item list-group-item action" id="list-payment-list" data-toggle="list" href="#list-payment">Payment</a>
                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="nav-tabcontent">
                <div class="tab-pane  fade" id="list-appointment" role="tabpanel" aria-labelledby=
                "list-appointment-list">
                    <div class="card">
                        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                            Book an Appointment
                        </div>
                        <div class="container">
                            <div class="card-body">
                                <form class="form-group" action="function.php" method="post">
                                    <label>First Name</label>
                                    <input type="text" name="fname" class="form-control"><br>
                                    <label>Last Name</label>
                                    <input type="text" name="lname" class="form-control"><br>
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"><br>
                                    <label>Contact</label>
                                    <input type="text" name="contact" class="form-control"><br>
                                    <label>DOB: <br></label>
                                    <input type="text" name="dob" class="form-control" placeholder="Year of Birth"><br>
                                    <label>Residence: <br></label>
                                    <input type="text" name="residence" class="form-control" placeholder="Enter location"><br>
                                    <label>Address: <br></label>
                                    <input type="text" name="address" class="form-control" placeholder="Address"><br>
                                    <label>Next of keen: <br></label>
                                    <input type="text" name="nextKeen" class="form-control" placeholder="Next of keen"><br>
                                    <label>NHIF number: <br></label>
                                    <input type="text" name="nhifNo" class="form-control" placeholder="NHIF number"><br><br>
                                    <label>Doctor Appointment</label>
                                    <select name="doctor" class="form-control">
                                        <!--                            <option value="Dr. Flovian">Dr. Flovian from 6pm to 8pm</option>-->
                                        <!--                            <option value="Dr. Nick">Dr. Nick from 4pm to 6pm</option>-->
                                        <?php  display_doctors(); ?>

                                    </select><br>
                                    <label >Payment</label>
                                    <select name="status" class="form-control">
                                        <option value="paid">Paid</option>
                                        <option value="pay later">Pay later</option>
                                    </select><br><br>
                                    <button type="submit" name="submit" id="btnlg" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="tab-pane  fade" id="list-patient" role="tabpanel" aria-labelledby=
                "list-patient-list">

                    <div class="card-body">
                        <a style="width: 200px" class="list-group-item list-group-item action"  href="Patient_details.php">Patient Details</a>
                    </div>



                </div>
                <div class="tab-pane  fade" id="list-doctors" role="tabpanel" aria-labelledby=
                "list-doctors-list">
                    <form class="form-group" action="function.php" method="post">
                        <label>Doctor's name</label>
                        <input type="text" name="doc-name" placeholder="Enter doctor's name" class="form-control"><br>
                        <input type="submit" name="doc-btn" class="btn btn-primary" value="Add Doctor">

                    </form>
                </div>
                <div class="tab-pane  fade" id="list-payment" role="tabpanel" aria-labelledby=
                "list-payment-list">
                    <div class="card">
                        <div class="card-body">
                            <form class="form-group" action="function.php" method="post">
                                <input type="text" name="contact" class="form-control" placeholder=" Enter contact"><br>

                                <select name="status" class="form-control">
                                    <option value="paid">Paid</option>
                                    <option value="pay later">Pay later</option>
                                </select><br><br>
                                <button type="submit" name="update" class="btn btn-primary">Update</button>

                            </form>
                        </div><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
