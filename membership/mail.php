<?php 
require "vendor/autoload.php";
use App\classes\Joma;
$info = new Joma();

//save data to DB
if(isset($_POST['btn'])){
    if($info->saveInfoOne()){
    	//echo 'Data has been sent<br>';
    }
}

//var_dump($_REQUEST);
//die(1);

// Mail data to Email
$msg="Full Name :".$_POST["full_name"]."<br>"."Father Name :".$_POST["fathers_name"]."<br>"."Mother Name :".$_POST["mothers_name"]."<br>"."Present Address :".$_POST["present_address"]."<br>"."Permanent Address :".$_POST["permanent_address"]."<br>"."NID number :".$_POST["nid"]."<br>"."Gender :".$_POST["gender"]."<br>"."Religion :".$_POST["religion"]."<br>"."Blood group :".$_POST["blood_group"]."<br>"."Date of Birth :".$_POST["date"]."<br>"."Mobile Number :".$_POST["mobile"]."<br>"."Email :".$_POST["email"]."<br>"."Qualification :".$_POST["qualification"]."<br>"."Occupation :".$_POST["occupation"]."<br>"."Company Name/Institution Name :".$_POST["company_name"]."<br>"."Position :".$_POST["position"]."<br>";

$confirm_msg='Dear '.$_POST["full_name"].',<br>';
$confirm_msg.='Your Membership Request has been recieved. We will contact you soon for futher verification.<br><br>';
$confirm_msg.='Regards- FriendsForever<br>';
// send email
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
if(mail("sam93.one@gmail.com","Membership Confirmation",$msg,$headers)){
	if(mail($_POST["email"],"Thanking you for Membership Request",$confirm_msg,$headers)){
		//echo "Mail has been saved";
		header('Location: insert1.php?msg=success');
	}
	//echo "Mail has been saved";
}
?>