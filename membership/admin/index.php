<?php

require "../vendor/autoload.php";
use App\classes\Joma;

session_start();
if ($_SESSION['id']==null) {
    header('Location:login.php');
}



$mem=new Joma();
$queryResult= $mem->viewMember();

if (isset($_GET['logout'])) {
    $mem->adminLogout();
}

if (isset($_GET['status'])) {
    $mem->deleteMember($_GET['id']);




}

?>
<html>
<head>
    <title>View Member</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php //include 'include/menu.php' ?>

<div class="container-fluid">
    <div class="row">
        <div style="margin-top:100px; margin-left: 20px">
            <h3 style="color: green"><?php echo $_SESSION['admin_name'] ?></h3> <a href="?logout=true">(Logout)</a>
            <hr>
            <h1>Information of all registered members</h1>
                    <table id="example" class="table table-striped table-bordered" style="width:200px">
                        <thead >
                        <tr>
                            <th >Serial No.</th>
                            <th >Image</th>
                            <th >Full Name</th>
                            <th >Father Name</th>
                            <th >Mother Name</th>
                            <th >Present Address</th>
                            <th >Permanent Address</th>
                            <th >NID Number</th>
                            <th >Gender</th>
                            <th >Religion</th>
                            <th >Blood Group</th>
                            <th >Date of Birth</th>
                            <th >Mobile Number</th>
                            <th >Email</th>
                            <th >Qualification</th>
                            <th >Occupation</th>
                            <th >Company Name</th>
                            <th >Position</th>
                            <th >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1; ?>
                        <?php while($m= mysqli_fetch_assoc($queryResult)) { ?>
                            <tr>
                                <td><?php  echo $i++; ?></td>
                                <td><img src="<?php echo 'http://localhost/membership/assets/member-images/'.$m['image'] ?>"  width="auto" height="100"></td>
                                <td><?php echo $m['full_name'] ?></td>
                                <td><?php echo $m['fathers_name'] ?></td>
                                <td><?php echo $m['mothers_name'] ?></td>
                                <td><?php echo $m['present_address'] ?></td>
                                <td><?php echo $m['permanent_address'] ?></td>
                                <td><?php echo $m['nid'] ?></td>
                                <td><?php echo $m['gender'] ?></td>
                                <td><?php echo $m['religion'] ?></td>
                                <td><?php echo $m['blood_group'] ?></td>
                                <td><?php echo $m['date'] ?></td>
                                <td><?php echo $m['mobile'] ?></td>
                                <td><?php echo $m['email'] ?></td>
                                <td><?php echo $m['qualification'] ?></td>
                                <td><?php echo $m['occupation'] ?></td>
                                <td><?php echo $m['company_name'] ?></td>
                                <td><?php echo $m['position'] ?></td>
                                <td>
                                    <a href="edit-member.php?id= <?php echo $m['id'] ?>">Edit</a> ||
                                    <a href="?status=delete&id=<?php echo $m['id']?>"  onclick="return confirm('Are you sure you want to delete?')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
            <hr>

        </div>
    </div>
</div>


<!--<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>-->
<!--<script src="../js/bootstrap.min.js"></script>-->
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>

</body>

<html>