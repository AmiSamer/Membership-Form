<?php
session_start();
require "../vendor/autoload.php";
use App\classes\Login;

$login= new Login();

if (isset($_POST['btn'])) {
    $login->adminLoginCheck();
}

?>


<html>

<head>
    <title>LogIn</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="offset-4 col-mid-6" style="margin-top:200px">
            <div class="card">
                <div class="card header text-center bg-primary">
                    <h6 style="color: white">Admin Pannel LogIn</h6>
                </div>

                <div class="card body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="admin_email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="admin_password">
                        </div>

                        <button type="submit" class="btn btn-success btn-block" name="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>