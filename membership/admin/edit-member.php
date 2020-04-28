<?php
session_start();
require "../vendor/autoload.php";
use App\classes\Joma;

$mem= new Joma();
$message='';
$queryResult=$mem->editMember($_GET['id']);
$data= mysqli_fetch_assoc($queryResult);

if (isset($_POST['btn'])) {
    $mem->updateMember();
}

?>

<html>
<head>
    <title>Edit Information</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php //include 'include/menu.php' ?>


<div class="container-fluid" style="align-content: center">
    <div class="row">
        <div style="margin-top:100px; margin-left: 60px; margin-right: 20px; width: 80%">
            <?php if($message) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo $message; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            <?php } ?>
            <div class="card">
                <div class="card header text-center">
                   <h3> Update Member's Information</h3>
                </div>

                <div class="card body" style="padding: 20px">
                    <form  method="post" enctype="multipart/form-data" id="postForm">



                        <div class="form-group">
                            <label><b>Member Image</b></label><br>
                            <img src="<?php echo 'http://localhost/membership/assets/member-images/'.$data['image'] ?>" style="width: auto" height="40px">
                            <input type="file" class="form-control-file"  name="image">

                        </div>


                        <div class="form-group">
                            <label><b>Full Name</b></label>
                            <input type="text" class="form-control"  name="full_name" value="<?php echo $data['full_name'] ?>">
                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Father Name</b></label>
                            <input type="text" class="form-control"  name="fathers_name" value="<?php echo $data['fathers_name'] ?>">
                        </div>

                        <div class="form-group">
                            <label><b>Mother Name</b></label>
                            <input type="text" class="form-control"  name="mothers_name" value="<?php echo $data['mothers_name'] ?>">
                        </div>

                        <div class="form-group">
                            <label><b>Present Address</b></label>
                            <input type="text" class="form-control"  name="present_address" value="<?php echo $data['present_address'] ?>">
                        </div>

                        <div class="form-group">
                            <label><b>Permanent Address</b></label>
                            <input type="text" class="form-control"  name="permanent_address" value="<?php echo $data['permanent_address'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>NID Number</b></label>
                            <input type="text" class="form-control"  name="nid" value="<?php echo $data['nid'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Gender</b></label>
                            <input type="text" class="form-control"  name="gender" value="<?php echo $data['gender'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Religion</b></label>
                            <input type="text" class="form-control"  name="religion" value="<?php echo $data['religion'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Blood Group</b></label>
                            <input type="text" class="form-control"  name="blood_group" value="<?php echo $data['blood_group'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Date of Birth</b></label>
                            <input type="text" class="form-control"  name="date" value="<?php echo $data['date'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Mobile Number</b></label>
                            <input type="text" class="form-control"  name="mobile" value="<?php echo $data['mobile'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="text" class="form-control"  name="email" value="<?php echo $data['email'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Qualification</b></label>
                            <input type="text" class="form-control"  name="qualification" value="<?php echo $data['qualification'] ?>">
                        </div>



                        <div class="form-group">
                            <label><b>Occupation</b></label>
                            <input type="text" class="form-control"  name="occupation" value="<?php echo $data['occupation'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Company Name</b></label>
                            <input type="text" class="form-control"  name="company_name" value="<?php echo $data['company_name'] ?>">
                        </div>


                        <div class="form-group">
                            <label><b>Position</b></label>
                            <input type="text" class="form-control"  name="position" value="<?php echo $data['position'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg float-right" name="btn">Update</button>
                    </form>
                    <br>
                </div>

            </div>
            <br>
            <br>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="../js/bootstrap.min.js"></script>

</body>
</html>
