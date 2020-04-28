<?php


namespace App\classes;
use App\classes\Database;

class Joma
{
    public function saveInfoOne(){



$directory = 'assets/member-images/';
        $random=rand();
        $imageName =$random.$_FILES['image']['name'];

        $imageUrl = $directory.$imageName;
        $fileType = pathinfo($imageName, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['image']['tmp_name']);
        if($check){
            if(file_exists($imageUrl)){
                die('File already Exists. Please upload a new file');
            } else {
                if($_FILES['image']['size'] > 2000000){
                    die('Image file too large. please upload within 2 mb');
                } else {
                    if($fileType != 'jpg' && $fileType != 'png'){
                        die('Image Type not Supported. Please upload a jpg or png file');
                    } else {
                        move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);

//                     $link = mysqli_connect("localhost","root","","friends");
                     $sql = "INSERT INTO members (image,full_name,fathers_name,mothers_name, present_address,permanent_address,nid,gender,religion,blood_group,date,mobile,email,qualification,occupation,company_name,position) VALUES ('$imageName','$_POST[full_name]','$_POST[fathers_name]','$_POST[mothers_name]','$_POST[present_address]','$_POST[permanent_address]','$_POST[nid]','$_POST[gender]','$_POST[religion]','$_POST[blood_group]','$_POST[date]','$_POST[mobile]','$_POST[email]','$_POST[qualification]','$_POST[occupation]','$_POST[company_name]','$_POST[position]')";
                        echo $sql;
                   if(mysqli_query(Database::dbConnection(),$sql)){
                        return "Member Info Saved Successfully";
                     } else {
//                 die("Query Problem".mysqli_error($link));
                       die('Query Problem'.mysqli_error(Database::dbConnection()));
                     }

                }
            }
        }
    }

    }



    public function viewMember()
    {

        $sql= "SELECT * FROM members";
        if ($queryResult=mysqli_query(Database::dbConnection(),$sql)) {
            return $queryResult;
        }

        else
        {
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }

    }


    public function editMember($id)
    {
        $sql="SELECT * FROM members WHERE id='$id'";
        if ($queryResult=mysqli_query(Database::dbConnection(),$sql)) {
            return $queryResult;
        }

        else
        {
            die('Query Problem'.mysqli_error(Database::dbConnection()));
        }
    }







    public function updateMember()
    {
        $postImage= $_FILES['image']['name'];

        if ($postImage) {


            $sql="SELECT * FROM members WHERE id='$_POST[id]'";
            $queryResult=mysqli_query(Database::dbConnection(),$sql);
            $postInfo= mysqli_fetch_assoc($queryResult);
            unlink($postInfo['image']); //unlink kore nite hobe image...nahole kaaj korbe na

            $directory = '../assets/member-images/';
            $random=rand();
            $imageName = $random.$_FILES['image']['name'];
            $imageUrl = $directory.$imageName;
            $fileType = pathinfo($imageName, PATHINFO_EXTENSION);
            $check = getimagesize($_FILES['image']['tmp_name']);
            if($check){
                if(file_exists($imageUrl)){
                    die('File already Exists. Please upload a new file');
                } else {
                    if($_FILES['image']['size'] > 2000000){
                        die('Image file too large. please upload within 2 mb');
                    } else {
                        if($fileType != 'jpg' && $fileType != 'png'){
                            die('Image Type not Supported. Please upload a jpg or png file');
                        } else {
                            move_uploaded_file($_FILES['image']['tmp_name'], $imageUrl);

                            $sql = "UPDATE members SET image ='$imageName', full_name = '$_POST[full_name]', fathers_name = '$_POST[fathers_name]',
mothers_name = '$_POST[mothers_name]', present_address = '$_POST[present_address]', permanent_address = '$_POST[permanent_address]',  nid = '$_POST[nid]',  gender = '$_POST[gender]',
   religion = '$_POST[religion]',  blood_group = '$_POST[blood_group]',   date = '$_POST[date]',  mobile = '$_POST[mobile]',  email = '$_POST[email]', qualification = '$_POST[qualification]', 
     occupation = '$_POST[occupation]',  company_name = '$_POST[company_name]', position = '$_POST[position]' WHERE id = '$_POST[id]'  ";

                            //post_image='$imageUrl' nisi...that means...variable ta nite hobe



                            if (mysqli_query(Database::dbConnection(),$sql)){
                                header('Location:index.php');
                            }
                            else{
                                die("Query Problem".mysqli_error(Database::dbConnection()));
                            }
                        }
                    }
                }
            }



        }
        else
        {
            $sql = "UPDATE members SET  full_name = '$_POST[full_name]', fathers_name = '$_POST[fathers_name]',
mothers_name = '$_POST[mothers_name]', present_address = '$_POST[present_address]', permanent_address = '$_POST[permanent_address]',  nid = '$_POST[nid]',  gender = '$_POST[gender]',
   religion = '$_POST[religion]',  blood_group = '$_POST[blood_group]',   date = '$_POST[date]',  mobile = '$_POST[mobile]',  email = '$_POST[email]', qualification = '$_POST[qualification]', 
     occupation = '$_POST[occupation]',  company_name = '$_POST[company_name]', position = '$_POST[position]' WHERE id = '$_POST[id]'  ";

            if (mysqli_query(Database::dbConnection(),$sql)) {
                header('Location:index.php');
            }

            else
            {
                die('Query Problem'.mysqli_error(Database::dbConnection()));
            }
        }


    }




    public function deleteMember($id)
    {
        $sql="DELETE FROM members WHERE id = '$id'";
        if (mysqli_query(Database::dbConnection(),$sql))
        {
            header('Location:index.php');
        }
        else
            {
                die('Query Problem'.mysqli_error(Database::dbConnection()));
            }



    }



    public function adminLogout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['admin_name']);
        header('Location:login.php');
    }




}