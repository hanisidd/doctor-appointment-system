<?php
session_start();
require_once('config.php');
// Doctor log in code
if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['pass'];
$query = "SELECT * from doctor where doc_email = '$email ' and doc_password='$pass'";
if($result=$mysqli->query($query)){
while($row=$result->fetch_object()){
    $_SESSION['did']=$row->doc_id;
    $_SESSION['dusername']=$row->doc_name;
    $_SESSION['dpic']=$row->doc_pic;
    $_SESSION['status']="log inSuccesfully";
    $_SESSION['status_code']="success";
header('location:doctordashboard.php');
}
}
else{

header('location:index.php?msg="Invalid username or password"');
}
}
//update doctor profile
if(isset($_POST['edit']))
                    {
                        $name = $_POST['name'];
                       
                        $id = $_POST['id'];
                        $email = $_POST['email'];
                        $address = $_POST['add'];
                        $contact = $_POST['contact'];
                        $password = $_POST['pass'];
                       
                        $oldpic =$_POST['oldpic'];
                       
                   
                        if(!empty($_FILES['img'] ['name']))
                        {
                   
                        $fileName = $_FILES['img']['name'];
                        $file_size = $_FILES['img']['size'];
                        $file_tmp = $_FILES['img']['tmp_name'];
                        $file_type = $_FILES['img']['type'];
                        $folder = "doctor/";
                        
                        
                        if(strtolower($file_type) == "image/jpeg" || strtolower($file_type) == "image/jpg" || strtolower($file_type) == "image/png" || strtolower($file_type) == "image/webp")
                        {
                            if($file_size <= 2097152 )
                            {
                               $oldpic = $_POST ['oldpic'];
                               $folder = 'doctor/'.'_'. rand(1,1000) . $fileName;
                               $query = "update doctor set doc_name='$name',doc_email='$email',doc_pic='$folder',doc_address='$address',doc_contact='$contact',doc_password='$password',doc_description='$description' where doc_id =$id ";

                                if($mysqli->query($query)==true)
                                {
                                    
                                   move_uploaded_file($file_tmp,$folder);
                                   unlink ($oldpic);
                                   header ('location:doctordashboard.php?msg=Data Updated');
                        
                                }
                                else {
                                    
                                    header ('location:doctordashboard.php?msg=Data Not Updated');
                                }
                   
                            }
                            else
                            { 
                                header ('location:doctordashboard.php?msg=File size must be exactly 2 MB');
                            }
                        }
                        else
                        { 
                            header ('location:doctordashboard.php?msg=extension not allowed, please choose a JPEG, JPG or PNG file');
                        }
                       
                    }
                    else{
                        $query = "update doctor set doc_name='$name',doc_email='$email',doc_address='$address',doc_contact='$contact',doc_password='$password' where doc_id =$id";
                       if($mysqli->query($query))
                       {$_SESSION['status']=" Doctor Details Updated Succesfully";
                        $_SESSION['status_code']="success";
                           header ('location:doctordashboard.php?msg=Data Updated');
                   
                       }
                       else{
                        $_SESSION['status']=" Doctor Details not updated";
                        $_SESSION['status_code']="error";
                           echo $mysqli->error;
                       }
                   }
                   
                   }

                   //edit appointment status

if (isset($_POST['app_status2'])) {


    $status = $_POST['app_status2'];
    $id1 = $_POST['id2'];
$id=$_SESSION['did'];
    $sql = "update appointments set app_status='$status' where app_id=$id1";

    if ($mysqli->query($sql) == true) {
        $_SESSION['status'] = " Appointment status changed Succesfully";
        $_SESSION['status_code'] = "success"; 
header('location:doctordashboard.php?msg=" succesfully"');
        //<!-- <script> window.location="viewapp2.php" </script> -->
        //header("location:viewapp2/".$id.".php");


    } else {
        $_SESSION['status'] = " not change ";
        $_SESSION['status_code'] = "error";
        echo $mysqli->error;
    }
}
                             //end
                 

?>