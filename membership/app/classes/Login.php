<?php

namespace App\classes;
use App\classes\Database;

class Login
{
    public function adminLoginCheck(){
        $email=$_POST['admin_email'];
        $password=md5($_POST['admin_password']);

        $sql= "SELECT * FROM users WHERE admin_email='$email' AND admin_password='$password'";
        if ($queryResult= mysqli_query(Database::dbConnection(),$sql)) {
            $user= mysqli_fetch_assoc($queryResult);
            if ($user) {

                session_start();
                $_SESSION['id']= $user['id'];
                $_SESSION['admin_name']=$user['admin_name'];

                header('Location:index.php');
            }

            else
            {
                header('Location:login.php');
            }

//             echo "<pre>";
//             print_r($user);
        }

        else
        {
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }




}


?>