<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hospital Management</title>

    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="Bootstrap/js/jquery.min.js.txt"></script>
    <script src="Bootstrap/js/popper.min.js.txt"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/cdn.js"></script>



</head>

<style type="text/css">
    btnlg:hover{cursor: pointer}
</style>
<body style="background:url('images/anim1.jpg')no-repeat; background-size:cover;">

<!--Create and style a login form-->

<div  class="container" style="width:400px;margin-top: 100px">
    <div class="card">
        <img  src="images/docs.jpg" class="card-img-top">
        <div class="card-body">
            <form class="form-group" action="docFunc.php" method="post">
                <label >Username</label>
                <input type="text" name="username" class="form-control" placeholder="Enter name"><br>
                <label >Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password"><br>

                <button type="submit" name="doc-login" id="btnlg" class="btn btn-primary">Submit</button>

            </form>
        </div>
    </div>
</div>

</body>
</html>
