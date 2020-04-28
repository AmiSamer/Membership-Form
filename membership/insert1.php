<?php
// require "vendor/autoload.php";
// use App\classes\Joma;
// $message = '';
// $info = new Joma();

// if(isset($_POST['btn'])){
//     $message = $info->saveInfoOne();
// }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Membership Form</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<div style="background: radial-gradient(#2C3E50,  #4CA1AF);">
    <div class="container">
       
        <form style=" background-color: #FAFCFC; padding: 25px; width: 100%; margin: auto; border-radius: 25px" action="mail.php" method="post" enctype="multipart/form-data">

            <p style="text-align:center;"><img src="Logo.jpg" style="height: auto; max-height: 125px;" alt="Friends Forever Logo"></p>
            <h2 align="center" style="color: black; font-size: 125%;"><b> Friends Forever Foundation</b></h2>
        <br>
        <div align="center" style="display: none;">
             <span style="color: black">G.A Bhaban, 3rd Floor, Purana Paltan, Dhaka 1000</span><br>
<span style="color: black"><b>email:</b> friendsforevertweenty@gmail.com</span>
        </div>
       
            <h4 style="color: #08BED0; font-size: 110%;" align="center"><b><u>Member Registration Form</u></b></h4>
            <?php if(isset($_GET["msg"])){ 

                    if($_GET["msg"]=="success"){

                        echo "<h4 style='text-align: center; padding: 30px; color: green;'>Thanks for your Registration.</h4>";

                    }
                }?>
            <br><br>
            <div class="form-group">
                <label>Picture<small style="color: red"> *</small></label>
                <input type="file" name="image" class="form-control-file form-control-sm" style="height: 20%" required>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Full Name<small style="color: red"> *</small></label>
                        <input type="name" name="full_name" class="form-control form-control-sm" placeholder="Ex. Saiful Islam" style="height: 20%" required>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Father's Name<small style="color: red"> *</small></label>
                        <input type="name" name="fathers_name" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Mother's Name<small style="color: red"> *</small></label>
                        <input type="name" name="mothers_name" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Present Address<small style="color: red"> *</small></label>
                        <input type="text" name="present_address" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Permanent Address<small style="color: red"> *</small></label>
                        <input type="text" name="permanent_address" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>NID number<small style="color: red"> *</small></label>
                        <input type="text" name="nid" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>

                <!-- <div class="col-md-6">
                    <div class="form-group">
                        <label>Passport Number</label>
                        <input type="text" name="passport" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div> -->
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Gender<small style="color: red"> *</small></label>
                        <select name="gender" class="form-control form-control-sm" style="height: 20%" required>
                            <option></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Religion<small style="color: red"> *</small></label>
                        <select name="religion" class="form-control form-control-sm" style="height: 20%" >
                            <option></option>
                            <option value="Islam">Islam</option>
                            <option value="Hinduism">Hinduism</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Christianity">Christianity</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Blood group<small style="color: red"> *</small></label>
                        <select name="blood_group" class="form-control form-control-sm" style="height: 20%" required>
                            <option></option>
                            <option value="A+">A+</option>
                            <option value="B+">B+</option>
                            <option value="AB+">AB+</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="B-">B-</option>
                            <option value="AB-">AB-</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Date of Birth<small style="color: red"> *</small></label>
                        <input type="Date" name="date" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Mobile Number<small style="color: red"> *</small></label>
                        <input type="text" name="mobile" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control form-control-sm" style="height: 20%" required>
                    </div>
                </div>
            </div>

           

   <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Qualification<small style="color: red"> *</small></label>
                         <select name="qualification" class="form-control form-control-sm" style="height: 20%" required>
                            <option></option>
                            <option value="N/A">N/A</option>
                            <option value="SSC">SSC</option>
                            <option value="HSC">HSC</option>
                            <option value="Bachelors">Bachelor's</option>
                            <option value="Honours">Honours</option>
                            <option value="BBA">BBA</option>
                            <option value="MBBS">MBBS</option>
                            <option value="Masters">Master's</option>
                            <option value="MBA">MBA</option>
                            <option value="Ph.D">Ph.D</option>
                            
                        </select>
                        <!-- <input type="name" name="qualification" class="form-control form-control-sm" style="height: 20%" required> -->
                    </div>
                </div>
            </div>
            


            <div class="row-cols-md-12">
                <div class="form-group">
                    <label>Occupation<small style="color: red"> *</small></label>
                    <select name="occupation" class="form-control form-control-sm" style="height: 20%" required>
                        <option></option>
                        <option value="Businessman" id="busy" >Businessman</option>
                        <option value="Job Holder" id="job">Job Holder</option>
                        <option value="Self Employed" id="self" >Self Employed</option>
                        <option value="Service Holder" id="service">Service Holder</option>
                        <option value="Housewife" id="house">Housewife</option>
                        <option value="Student" id="stu">Student</option>
                        <option value="Unemployed" id="un">Unemployed</option>
                    </select>
                </div>
            </div>




            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="cc">Company Name/Institution Name<small style="color: red"> *</small></label>
                        <input type="text" name="company_name" class="form-control form-control-sm" style="height: 20%;"  list="com" required>
                        <datalist id="com">
                            <option value="N/A"></option>
                        </datalist>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label id="pp" >Position<small style="color: red"> *</small></label>
                        <input type="text" name="position" class="form-control form-control-sm" style="height: 20%; " list="pos" required>
                        <datalist id="pos">
                            <option value="N/A"></option>
                        </datalist>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <button type="submit" name="btn" class="btn btn-lg btn-success " style="float:right;">Save</button>
            <br>
            <h5 style="color: saddlebrown;" align="center"><?php //echo $message; ?></h5>
            <br>
        </form>
        <br>
        <br>
    </div>
</div>
</body>
</html>