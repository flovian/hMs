<!Doctype html>
<?php include ("function.php")?>
<html lang="en">
<head>
    <title>Doctor's Panel</title>
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
                    <a  class="list-group-item list-group-item action" id="list-medRecords-list" data-toggle="list" href="#list-medRecords">Medical Records</a>
                    <a  class="list-group-item list-group-item action" id="list-pharmacy-list" data-toggle="list" href="#list-pharmacy">Pharmacy/Drugs</a>
                    <a  class="list-group-item list-group-item action" id="list-attendance-list" data-toggle="list" href="#list-attendance">Attendance/Shift</a>

                </div>
            </div>
        </div>
        <div class="col-9">
            <div class="tab-content" id="nav-tabcontent">
                <div class="tab-pane  fade" id="list-medRecords" role="tabpanel" aria-labelledby=
                "list-medRecords-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <a style="width: 200px" class="list-group-item list-group-item action"  href="patRecords.php">Patient Details</a>
                                <a style="width: 200px"  class="list-group-item list-group-item action"  id="list-clinicalRep-list" data-toggle="list" href="#list-clinicalRep">Clinical Report</a>
                            </div>
                            <div class="col-9">
                                <div class="tab-pane  fade" id="list-clinicalRep" role="tabpanel" aria-labelledby=
                                "list-clinicalRep-list">
                                    <div class="card">
                                        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                            <h7 style="padding-left: 170px">Create Clinical Reports</h7>
                                        </div>
                                        <div class="container">
                                            <div class="card-body">
                                                <form class="form-group" action="function.php" method="post">
                                                    <label>Name</label>
                                                    <input type="text" name="name" class="form-control"><br>
                                                    <label>Contact</label>
                                                    <input type="text" name="contact" class="form-control"><br>
                                                    <label>Conducted Test</label>
                                                    <input type="text" name="test" class="form-control"><br>
                                                    <label>Illness</label>
                                                    <textarea type="text" name="illness" class="form-control"></textarea><br>
                                                    <label>Prescription/Treatment: <br></label>
                                                    <textarea type="text" name="prescription" class="form-control" placeholder="Enter prescription"></textarea><br>
                                                    <input type="submit" name="clinicRp-btn" class="btn btn-dark" value="Submit">
                                                </form>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane  fade" id="list-pharmacy" role="tabpanel" aria-labelledby=
                "list-pharmacy-list">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <a style="width: 200px" class="list-group-item list-group-item-active" id="list-addDrug-list" data-toggle="list" href="#list-addDrug">Add new drug</a>
                                <a style="width: 200px" class="list-group-item list-group-item-action" id="list-viewDrug-list" data-toggle="list" href="#list-viewDrug">Display Available Drugs</a>
                            </div>
                            <div class="col-9">
                                <div class="tab-content" id="nav-tabcontent">
                                <div class="tab-pane  fade" id="list-addDrug" role="tabpanel" aria-labelledby=
                                "list-addDrug-list">
                                    <div class="card">
                                        <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
                                            <h7 style="padding-left: 170px">Add New Drug</h7>
                                        </div>
                                        <div class="container">
                                            <div class="card-body">
                                                <form class="form-group" action="function.php" method="post">
                                                    <label>Name of Tablet</label>
                                                    <input type="text" name="tbName" class="form-control"><br>
                                                    <label>Reference No</label>
                                                    <input type="text" name="refNo" class="form-control"><br>
                                                    <label>No of Tablets</label>
                                                    <input type="text" name="tbNo" class="form-control"><br>
                                                    <label>Storage Advice</label>
                                                    <input type="text" name="storage" class="form-control"><br>
                                                    <label>Issued Date</label>
                                                    <input type="text" name="issuedDt" class="form-control"><br>
                                                    <label>Expiry Date</label>
                                                    <input type="text" name="expDate" class="form-control"><br>
                                                    <label>Side Effects</label>
                                                    <textarea type="text" name="effects" class="form-control"></textarea><br>
                                                    <div>
                                                        <input type="submit" name="children-btn" class="btn btn-dark" value="To children">
                                                        <input type="submit" name="adult-btn" class="btn btn-dark" value="To Adults">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="tab-pane  fade" id="list-viewDrug" role="tabpanel" aria-labelledby=
                                "list-viewDrug-list">
                                    <a style="width: 300px" class="list-group-item list-group-item-action"  href="ChildrenPharmacy.php">View Children's Pharmacy</a>
                                    <a style="width: 300px" class="list-group-item list-group-item-action" href="AdultsPharmacy.php">View Adults' Pharmacy</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  fade" id="list-attendance" role="tabpanel" aria-labelledby=
            "list-attendance-list">

            </div>

        </div>
    </div>
</div>
</div>
</body>
</html>
