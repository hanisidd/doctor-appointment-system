<?php
session_start();
require_once('config.php');
// // admin log in code
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT * from admin where admin_email = '$email ' and admin_password='$pass'";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_object()) {
            $_SESSION['id'] = $row->admin_id;
            $_SESSION['username'] = $row->admin_name;
            $_SESSION['pic'] = $row->admin_pic;
            header('location:dashboard.php');
        }
    } else {
        echo $mysqli->error;

        header('location:index.php?msg="Invalid username or password"');
    }
}

// adding department
if (isset($_POST['adddep'])) {

    $name = $_POST['name'];
    $des = $_POST['des'];
    $query = "insert into departments(dep_name,dep_description) values ('$name','$des')";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Department Added Succesfully";
        $_SESSION['status_code'] = "success";

        header('location:viewdep.php?msg="department added succesfully"');
    } else {
        $_SESSION['status'] = " Departmet Not Added Fail";
        $_SESSION['status_code'] = "error";
        header('location:adddep.php?msg="not added"');
    }
}
//add doctor

if (isset($_POST['adddoc'])) {
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $address = $_POST['add'];
    $contact = $_POST['contact'];
    $depId = $_POST['dep'];
    $description = $_POST['des'];
    $password = $_POST['pass'];
    $filename = $_FILES['img']['name'];
    $filetmp = $_FILES['img']['tmp_name'];
    $path = 'doctor/' . uniqid() . $filename;
    move_uploaded_file($filetmp, $path);
    $query = "insert into doctor(doc_name,doc_lname,doc_email,doc_pic,doc_address,doc_contact,doc_depid,doc_description,doc_password) 
values ('$name','$lname','$email','$path','$address','$contact',$depId,'$description','$password')";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Doctor Added Succesfully";
        $_SESSION['status_code'] = "success";
        // echo "Record Inserted"
        header('location:viewdoc.php?msg= record inserted');
    } else {
        // $_SESSION['status']=" Doctor Not Added ";
        // $_SESSION['status_code']="error";
        // unlink($path);
        echo $mysqli->error;
        // header('location:viewdoc.php?msg= record inserted faill');
    }
}
//add reports
if (isset($_POST['addr'])) {
    $number = $_POST['num'];
    $date = $_POST['date'];
    $tdate = $_POST['tdate'];
    $name = $_POST['name'];
    $filename = $_FILES['file']['name'];
    $filetmp = $_FILES['file']['tmp_name'];
    $path = 'reports/' . uniqid() . $filename;
    move_uploaded_file($filetmp, $path);
    $query = "insert into reports(r_number,r_date,r_udate,r_name,r_report) 
        values ('$number','$date','$tdate','$name','$path')";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " report Added Succesfully";
        $_SESSION['status_code'] = "success";
        // echo "Record Inserted"
        header('location:viewreport.php?msg= record inserted');
    } else {
        // $_SESSION['status']=" Doctor Not Added ";
        // $_SESSION['status_code']="error";
        // unlink($path);
        echo $mysqli->error;
        // header('location:viewdoc.php?msg= record inserted faill');
    }
}
//add disease
if (isset($_POST['adddis'])) {
    $name = $_POST['name'];
    $description = $_POST['des'];
    $prevention = $_POST['pre'];
    $filename = $_FILES['img']['name'];
    $filetmp = $_FILES['img']['tmp_name'];
    $path = 'disease/' . uniqid() . $filename;
    move_uploaded_file($filetmp, $path);
    $query = "insert into disease(dis_name,dis_description,dis_prevention,dis_pic) 
        values ('$name','$description','$prevention','$path')";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Disease Added Succesfully";
        $_SESSION['status_code'] = "success";
        //echo "Record Inserted";
        header('location:viewdisease.php?msg= record inserted');
    } else {
        $_SESSION['status'] = " Disease not Added";
        $_SESSION['status_code'] = "error";
        unlink($path);
        // echo $mysqli->error;
        header('location:viewdisease.php?msg= record inserted faill');
    }
}
//add admin
if (isset($_POST['addadmin'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['pass'];
    $filename = $_FILES['img']['name'];
    $filetmp = $_FILES['img']['tmp_name'];
    $path = 'adminimages/' . uniqid() . $filename;
    move_uploaded_file($filetmp, $path);
    $query = "insert into admin(admin_name,admin_email,admin_contact,admin_password,admin_pic) 
                values ('$name','$email','$contact','$password','$path')";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Admin Added Succesfully";
        $_SESSION['status_code'] = "success";
        // echo "Record Inserted";
        header('location:viewadmin.php?msg= record inserted');
    } else {
        $_SESSION['status'] = " Admin not Added ";
        $_SESSION['status_code'] = "error";
        unlink($path);
        //echo $mysqli->error;
        header('location:viewadmin.php?msg= record inserted faill');
    }
}



//edit departments
if (isset($_POST['updep'])) {

    $name = $_POST['name'];
    $id = $_POST['id'];
    $des = $_POST['des'];
    $query = "update departments set dep_name='$name',dep_description ='$des' where dep_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Department Updated Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:viewdep.php?msg="department updated succesfully"');
    } else {
        $_SESSION['status'] = " Department not Added";
        $_SESSION['status_code'] = "error";
        //echo $mysqli->error;
        header('location:viewdep.php?msg="not update"');
    }
}


//delete department

// if (isset($_GET['delid'])) {


//     $id = $_GET['delid'];
//     $query = "delete from departments  where dep_id =$id ";
//     if ($mysqli->query($query) == true) {
//         $_SESSION['status'] = " Department Deleted Succesfully";
//         $_SESSION['status_code'] = "success";
//         header('location:viewdep.php?msg="departmemt deleted succesfully"');
//     } else {
//         $_SESSION['status'] = " Department not Deleted ";
//         $_SESSION['status_code'] = "error";
//         //echo $mysqli->error;
//         header('location:viewdep.php?msg="not deleted"');
//     }
// }
//delete feedback -->

if (isset($_GET['fdelid'])) {


    $id = $_GET['fdelid'];
    $query = "delete from feedback  where f_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " feedback Deleted Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:feedback.php?msg="departmemt deleted succesfully"');
    } else {
        $_SESSION['status'] = " feedback not Deleted ";
        $_SESSION['status_code'] = "error";
        //echo $mysqli->error;
        header('location:feedback.php?msg="not deleted"');
    }
}
//delete contact -->

if (isset($_GET['cdelid'])) {


    $id = $_GET['cdelid'];
    $query = "delete from contact_us  where con_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " contact Deleted Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:contact.php?msg="contact deleted succesfully"');
    } else {
        $_SESSION['status'] = " contact not Deleted ";
        $_SESSION['status_code'] = "error";
        //echo $mysqli->error;
        header('location:contact.php?msg="not deleted"');
    }
}


//edit diseases


if (isset($_POST['updis'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    $prevention = $_POST['pre'];
    $description = $_POST['des'];
    $oldpic = $_POST['oldpic'];


    if (!empty($_FILES['img']['name'])) {

        $fileName = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];
        $folder = "disease/";


        if (strtolower($file_type) == "image/jpeg" || strtolower($file_type) == "image/jpg" || strtolower($file_type) == "image/png" || strtolower($file_type) == "image/webp") {
            if ($file_size <= 2097152) {
                $oldpic = $_POST['oldpic'];
                $folder = 'disease/' . '_' . rand(1, 1000) . $fileName;
                $query = "update disease set dis_name='$name',dis_description = '$description',dis_prevention ='$prevention',dis_pic='$folder' where dis_id =$id ";


                if ($mysqli->query($query) == true) {

                    move_uploaded_file($file_tmp, $folder);
                    unlink($oldpic);
                    header('location:viewdisease.php?msg=Data Updated');
                } else {

                    header('location:viewdisease.php?msg=Data Not Updated');
                }
            } else {
                header('location:viewdisease.php?msg=File size must be exactly 2 MB');
            }
        } else {
            header('location:viewdisease.php?msg=extension not allowed, please choose a JPEG, JPG or PNG file');
        }
    } else {
        $query = "update disease set dis_name='$name',dis_description = '$description',dis_prevention ='$prevention' where dis_id =$id ";
        if ($mysqli->query($query)) {
            $_SESSION['status'] = " Disease updated Succesfully";
            $_SESSION['status_code'] = "success";
            header('location:viewdisease.php?msg=Data Updated');
        } else {
            $_SESSION['status'] = " Disease not updated ";
            $_SESSION['status_code'] = "error";
            echo $mysqli->error;
        }
    }
}
//delete disease

if (isset($_GET['disid'])) {


    $id = $_GET['disid'];
    $query = "delete from disease  where dis_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Disease Deleted Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:viewdisease.php?msg="disease deleted succesfully"');
    } else {
        $_SESSION['status'] = " Disease not Deleted ";
        $_SESSION['status_code'] = "error";
        echo $mysqli->error;
        //header('location:viewdep.php?msg="not deleted"');
    }
}


//edit doctor
if (isset($_POST['updoc'])) {
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $address = $_POST['add'];
    $contact = $_POST['contact'];
    $password = $_POST['pass'];
    $description = $_POST['des'];
    $oldpic = $_POST['oldpic'];
   

    if (!empty($_FILES['img']['name'])) {

        $fileName = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];
        $folder = "doctor/";


        if (strtolower($file_type) == "image/jpeg" || strtolower($file_type) == "image/jpg" || strtolower($file_type) == "image/png" || strtolower($file_type) == "image/webp") {
            if ($file_size <= 2097152) {
                $oldpic = $_POST['oldpic'];
                $folder = 'doctor/' . '_' . rand(1, 1000) . $fileName;
                $query = "update doctor set doc_name='$name',doc_lname='$lname',doc_email='$email',doc_pic='$folder',doc_address='$address',doc_contact='$contact',doc_password='$password',doc_description='$description' where doc_id =$id ";

                if ($mysqli->query($query) == true) {

                    move_uploaded_file($file_tmp, $folder);
                    unlink($oldpic);
                    header('location:viewdoc.php?msg=Data Updated');
                } else {

                    header('location:viewdoc.php?msg=Data Not Updated');
                }
            } else {
                header('location:viewdoc.php?msg=File size must be exactly 2 MB');
            }
        } else {
            header('location:viewdoc.php?msg=extension not allowed, please choose a JPEG, JPG or PNG file');
        }
    } else {
        $query = "update doctor set doc_name='$name',doc_lname='$lname',doc_email='$email',doc_address='$address',doc_contact='$contact',doc_password='$password',doc_description='$description' where doc_id =$id";
        if ($mysqli->query($query)) {
            $_SESSION['status'] = " Doctor Details Updated Succesfully";
            $_SESSION['status_code'] = "success";
            header('location:viewdoc.php?msg=Data Updated');
        } else {
            $_SESSION['status'] = " Doctor Details not updated";
            $_SESSION['status_code'] = "error";
            echo $mysqli->error;
        }
    }
}
//end

//edit doctor status

if (isset($_GET['doc_id'])) {
    $id = $_GET['doc_id'];
    $status = $_GET['doc_status'];

    if ($status == 'active') {
        $query = "update doctor set doc_status ='deactive' where doc_id = $id ";
    } else {
        $query = "update doctor set doc_status='active' where doc_id ='$id' ";
    }

    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Doctor status changed Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:viewdoc.php?msg="status updated succesfully"');
    } else {
        $_SESSION['status'] = " Status not cahnged";
        $_SESSION['status_code'] = "error";
        //echo $mysqli->error;

        header('location:viewdoc.php?msg="not update"');
    }
}


//delete admin

if (isset($_GET['adminid'])) {


    $id = $_GET['adminid'];
    $query = "delete from admin  where admin_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Admin Deleted Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:viewadmin.php?msg="admin deleted succesfully"');
    } else {
        $_SESSION['status'] = " Admin not  Deleted ";
        $_SESSION['status_code'] = "error";
        echo $mysqli->error;
        header('location:viewadmin.php?msg="not deleted"');
    }
}

//edit profile details
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = $_POST['pass'];
    $oldpic = $_POST['oldpic'];


    if (!empty($_FILES['img']['name'])) {

        $fileName = $_FILES['img']['name'];
        $file_size = $_FILES['img']['size'];
        $file_tmp = $_FILES['img']['tmp_name'];
        $file_type = $_FILES['img']['type'];
        $folder = "adminimages/";


        if (strtolower($file_type) == "image/jpeg" || strtolower($file_type) == "image/jpg" || strtolower($file_type) == "image/png" || strtolower($file_type) == "image/webp") {
            if ($file_size <= 2097152) {
                $oldpic = $_POST['oldpic'];
                $folder = 'adminimages/' . '_' . rand(1, 1000) . $fileName;
                $query = "update admin set admin_name='$name',admin_email='$email',admin_pic='$folder',admin_contact='$contact',admin_password='$password' where admin_id =$id ";

                if ($mysqli->query($query) == true) {

                    move_uploaded_file($file_tmp, $folder);
                    unlink($oldpic);
                    header('location:dashboard.php?msg=Data Updated');
                } else {

                    header('location:dashboard.php?msg=Data Not Updated');
                }
            } else {
                header('location:dashboard.php?msg=File size must be exactly 2 MB');
            }
        } else {
            header('location:dashboard.php?msg=extension not allowed, please choose a JPEG, JPG or PNG file');
        }
    } else {
        $query = "update admin set admin_name='$name',admin_email='$email',admin_contact='$contact',admin_password='$password' where admin_id =$id ";
        if ($mysqli->query($query)) {
            $_SESSION['status'] = " Profile Details Updated Succesfully";
            $_SESSION['status_code'] = "success";
            header('location:dashboard.php?msg=Data Updated');
        } else {
            $_SESSION['status'] = " Details not updated";
            $_SESSION['status_code'] = "error";
            echo $mysqli->error;
        }
    }
}
//end
//edit reports


if (isset($_POST['upr'])) {
    $id = $_POST['id'];
    $number = $_POST['num'];
    $date = $_POST['date'];
    $tdate = $_POST['tdate'];
    $name = $_POST['name'];
    $oldfile = $_POST['oldfile'];


    if (!empty($_FILES['file']['name'])) {

        $fileName = $_FILES['file']['name'];
        $file_size = $_FILES['file']['size'];
        $file_tmp = $_FILES['file']['tmp_name'];
        $file_type = $_FILES['file']['type'];
        $folder = "reports/";


        if (strtolower($file_type) == "image/jpeg" || strtolower($file_type) == "image/jpg" || strtolower($file_type) == "image/png" || strtolower($file_type) == "image/webp") {
            if ($file_size <= 2097152) {
                $oldfile = $_POST['oldfile'];
                $folder = 'reports/' . '_' . rand(1, 1000) . $fileName;
                $query = "update reports set r_number='$number',r_date = '$date',r_udate ='$tdate',r_name='$name',r_report='$folder' where r_id =$id ";


                if ($mysqli->query($query) == true) {

                    move_uploaded_file($file_tmp, $folder);
                    unlink($oldfile);
                    header('location:viewdreport.php?msg=Data Updated');
                } else {

                    header('location:viewreport.php?msg=Data Not Updated');
                }
            } else {
                header('location:viewreport.php?msg=File size must be exactly 2 MB');
            }
        } else {
            header('location:viewreport.php?msg=extension not allowed, please choose a JPEG, JPG or PNG file');
        }
    } else {
        $query = "update reports set r_number='$number',r_date = '$date',r_udate ='$tdate',r_name='$name' where r_id =$id ";
        if ($mysqli->query($query)) {
            $_SESSION['status'] = " report updated Succesfully";
            $_SESSION['status_code'] = "success";
            header('location:viewreport.php?msg=Data Updated');
        } else {
            $_SESSION['status'] = "reports not updated ";
            $_SESSION['status_code'] = "error";
            echo $mysqli->error;
        }
    }
}

///delete reports
if (isset($_GET['rid'])) {


    $id = $_GET['rid'];
    $query = "delete from reports  where r_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " reports Deleted Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:viewreport.php?msg="disease deleted succesfully"');
    } else {
        $_SESSION['status'] = " reports not Deleted ";
        $_SESSION['status_code'] = "error";
        echo $mysqli->error;
        //header('location:viewreport.php?msg="not deleted"');
    }
}


///delete Appointments
if (isset($_GET['appdid'])) {


    $id = $_GET['appdid'];
    $query = "delete from appointments  where app_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['status'] = " Appointments Deleted Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:viewapp.php?msg="deleted succesfully"');
    } else {
        $_SESSION['status'] = " reports not Deleted ";
        $_SESSION['status_code'] = "error";
        echo $mysqli->error;
        //header('location:viewreport.php?msg="not deleted"');
    }
}
//edit appointment status

if (isset($_POST['app_status'])) {


    $status = $_POST['app_status'];
    $id = $_POST['id'];

    $sql = "update appointments set app_status='$status' where app_id=$id";

    if ($mysqli->query($sql) == true) {
        $_SESSION['status'] = " Appointment status changed Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:viewapp.php?msg=" succesfully"');
    } else {
        $_SESSION['status'] = " not change ";
        $_SESSION['status_code'] = "error";
        echo $mysqli->error;
    }
}
//edit doc dep
if (isset($_POST['updepdoc'])) {


    $dep = $_POST['depart'];
    $id = $_POST['id'];

    $sql = "update doctor set doc_depid='$dep' where doc_id=$id";

    if ($mysqli->query($sql) == true) {
        $_SESSION['status'] = " doctor department changed Succesfully";
        $_SESSION['status_code'] = "success";
        header('location:changedocdep.php?msg=" succesfully"');
    } else {
        $_SESSION['status'] = " not change ";
        $_SESSION['status_code'] = "error";
        echo $mysqli->error;
    }
}

///Changin doctor department

