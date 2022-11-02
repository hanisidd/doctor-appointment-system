<?php
session_start();
require_once('config.php');
//Patient Sign up -->
if (isset($_POST['signup'])) {

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['pass'];

    $query = "insert into patient(P_name,p_lname,p_address,p_email,p_password,p_contact,p_dob) values ('$name','$lname','$address','$email','$password','$phone','$dob')";
    if ($mysqli->query($query) == true) {

        $_SESSION['alert'] = "Account has been created successfull";
        $_SESSION['alert_code'] = "success";
        header('location:login.php?msg="succesfully"');
    } else {
        echo $mysqli->error;
        // $_SESSION['alert'] = "sign up un successfull";
        // $_SESSION['alert_code'] = "success";
        // header('location:index.php?msg="not added"');
    }
}
//patient loggin

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT * from patient where p_email = '$email ' and p_password='$pass'";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_object()) {

            $_SESSION['pid'] = $row->P_id;
            $_SESSION['username'] = $row->P_name;
            $_SESSION['alert'] = "login successfull";
            $_SESSION['alert_code'] = "success";
            header('location:home.php');
        }
    } else {
        echo $mysqli->error;
        $_SESSION['alert'] = "login un successfull";
        $_SESSION['alert_code'] = "error";
        header('location:index.php?msg="Invalid username or password"');
    }
}


// patient profile edit
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $contact = $_POST['contact'];
    $dob = $_POST['dob'];

    $query = "update patient set P_name='$name',p_lname='$lname',p_address='$address',p_email='$email',p_password='$password',p_contact='$contact',p_dob='$dob' where P_id =$id ";
    if ($mysqli->query($query) == true) {
        $_SESSION['alert'] = "profile updated  successfully";
        $_SESSION['alert_code'] = "success";
        header('location:userprofile.php?msg=" updated succesfully"');
    } else {
        $_SESSION['alert'] = "there is error in updation";
        $_SESSION['alert_code'] = "error";
        echo $mysqli->error;
        header('location:setting.php?msg="not update"');
    }
}
// <!-- date validation -->
//contact us
include('config.php');

if (isset($_POST['send'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $query = "insert into contact_us(name,phone,email,message) values ('$name','$phone','$email','$msg')";
    if ($mysqli->query($query) == true) {
        $_SESSION['alert'] = " Your Message has been sent ";
        $_SESSION['alert_code'] = "success";
        header('location:contactus.php?msg="succesfully"');
    } else {
        //echo $mysqli->error;
        $_SESSION['alert'] = " message not sent";
        $_SESSION['alert_code'] = "error";
        header('location:contactus.php?msg="not sent"');
    }
}
// feedback
if (isset($_POST['feed'])) {

    $feedback = $_POST['feedback'];
    $id = $_POST['id'];
    $query = "insert into feedback(pat_id,feedback) values ('$id','$feedback')";
    if ($mysqli->query($query) == true) {
        $_SESSION['alert'] = " Your feedback has been sent ";
        $_SESSION['alert_code'] = "success";
        header('location:home.php?msg="succesfully"');
    } else {
        // echo $mysqli->error;
        $_SESSION['alert'] = " message not sent";
        $_SESSION['alert_code'] = "error";
        header('location:home.php?msg="not sent"');
    }
}

//save report in profile
if (isset($_GET['id'])) {
$pid=$_SESSION['pid'];    
$id = $_GET['id'];
$report = $_GET['rep'];

 
    $query = "insert into saved_reports(patient_id,rep_id,s_rep) values ('$pid','$id','$report')";
    if ($mysqli->query($query) == true) {
        $_SESSION['alert'] = " report saved in your profile ";
        $_SESSION['alert_code'] = "success";
        header('location:reports.php?msg="succesfully"');
    } else {
        echo $mysqli->error;
        // $_SESSION['alert']=" message not sent";
        // $_SESSION['alert_code']="error";
        // header('location:home.php?msg="not sent"');
    }
}
//unsave report in profile
if (isset($_GET['sid'])) {
        
    $id = $_GET['sid'];
  
    
     
        $query = "delete from saved_reports where save_id =$id";
        if ($mysqli->query($query) == true) {
            $_SESSION['alert'] = " reports un saved ";
            $_SESSION['alert_code'] = "success";
            header('location:savedrep.php?msg="succesfully"');
        } else {
            echo $mysqli->error;
            // $_SESSION['alert']=" message not sent";
            // $_SESSION['alert_code']="error";
            // header('location:home.php?msg="not sent"');
        }
    }
//appointment booking
$d = $dr = '';
if (isset($_POST['book'])) {
    if ($_POST['d'] != '') {
        $d = $_POST['d'];
        $ey = date('Y', strtotime($_POST['d']));
        $em = date('m', strtotime($_POST['d']));
        $ed = date('d', strtotime($_POST['d']));
        $edays = ($ey - 1) + 365 + ($em - 1) * 30 + $ed;
        $sy = date('Y');
        $sm = date('m');
        $sd = date('d');
        $sdays = ($sy - 1) + 365 + ($sm - 1) * 30 + $sd;
        $diff = ($edays - $sdays);
        if ($diff > 0 && $diff <= 30) {
            // $dr = 'date of booking is right' . $d;
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $d = $_POST['d'];
            $cur_date = $_POST['c'];
            $doc_id = $_POST['doc'];
            $note = $_POST['note'];
            $pat_id = $_POST['pid'];




            $query = "insert into appointments(patient_id,doctor_id,app_date,app_createiondate,doc_remarks,name,phone,email) values ('$pat_id','$doc_id','$d','$cur_date','$note','$name','$phone','$email')";
            if ($mysqli->query($query) == true) {


                $_SESSION['alert'] = "Appointment request has been sent successfull soon you will recieve your recipt via email..";
                $_SESSION['alert_code'] = "success";
                header('location:bookapp.php?msg="succesfully"');
            } else {
                echo $mysqli->error;
                // $_SESSION['alert'] ="choose date between 30 days";
                // $_SESSION['alert_code'] ="error";
                // header('location:bookapp.php?msg="not done"');
            }
        } else {

            $_SESSION['alert'] = "Choose date between 30 days from now";
            $_SESSION['alert_code'] = "warning";
            header('location:bookapp.php?msg=" FAILES!!!"');
        }
    } else {
        $dr = "enter any date";
    }
}
//appointment booking
$d = $dr = '';
if (isset($_POST['bookh'])) {
    if ($_POST['d'] != '') {
        $d = $_POST['d'];
        $ey = date('Y', strtotime($_POST['d']));
        $em = date('m', strtotime($_POST['d']));
        $ed = date('d', strtotime($_POST['d']));
        $edays = ($ey - 1) + 365 + ($em - 1) * 30 + $ed;
        $sy = date('Y');
        $sm = date('m');
        $sd = date('d');
        $sdays = ($sy - 1) + 365 + ($sm - 1) * 30 + $sd;
        $diff = ($edays - $sdays);
        if ($diff > 0 && $diff <= 30) {
            // $dr = 'date of booking is right' . $d;
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $d = $_POST['d'];
            $cur_date = $_POST['c'];
            $doc_id = $_POST['doc'];
            $note = $_POST['note'];
            $pat_id = $_POST['pid'];




            $query = "insert into appointments(patient_id,doctor_id,app_date,app_createiondate,doc_remarks,name,phone,email) values ('$pat_id','$doc_id','$d','$cur_date','$note','$name','$phone','$email')";
            if ($mysqli->query($query) == true) {


                $_SESSION['alert'] = "Appointment request has been sent successfull soon you will recieve your recipt via email..";
                $_SESSION['alert_code'] = "success";
                header('location:home.php?msg="succesfully"');
            } else {
                echo $mysqli->error;
                // $_SESSION['alert'] ="choose date between 30 days";
                // $_SESSION['alert_code'] ="error";
                // header('location:bookapp.php?msg="not done"');
            }
        } else {

            $_SESSION['alert'] = "Choose date between 30 days from now";
            $_SESSION['alert_code'] = "warning";
            header('location:home.php?msg=" FAILES!!!"');
        }
    } else {
        $dr = "enter any date";
    }
}
