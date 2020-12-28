<!Doctype html>
<?php include ("function.php")?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patient Details</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="Bootstrap/js/jquery.min.js.txt"></script>
    <script src="Bootstrap/js/popper.min.js.txt"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron" style="background: url('images/anim1.jpg');
no repeat;background-size:cover;height: 250px"></div>
<div class="card">
    <div style="padding-left: 700px;" <h1><b>Patient Details</b></h1></div>
<div class="card-body" style="background-color: #3498DB;color:#ffffff;">

    <div class="row" >
        <div class="col-md-3">

            <a href="docsPanel.php"class="btn btn-light"><h9>Go Back</h9></a>
        </div>
        <div class="col-md-3">

            <a href="clinicalReports.php"class="btn btn-outline-light"><h9>View clinical report</h9></a>
        </div>

        <div class="col-md-6">
            <form class="form-group" action="searchpat_doc.php" method="post">
                <div class="row">
                    <div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter contact">
                    </div>
                    <div class="col-md-2"><input type="submit" name="patSearch-btn" class="btn btn-light" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div></div>
<div  style="background-color:#3498DB;color:#ffffff;">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th>Doctor Appointment </th>
            <th>Payment Status</th>
            <th>D.O.B</th>
            <th>Residence</th>
            <th>Address</th>
            <th>NextKeen</th>
            <th>NHIF.No<th>

        </tr>
        </thead>
        <tbody>
        <?php get_Patient_details()?>
        </tbody>
    </table>
</div>
</div>

</body>
</html>
