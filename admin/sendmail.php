<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once __DIR__ .'/vendor/autoload.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



if(isset($_POST['send'])){
    $email=$_POST['email'];
    $subject=$_POST['sub'];
    $message=$_POST['mes'];
    $name=$_POST['name'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $phone=$_POST['phone'];
    $note=$_POST['note'];
    $doc=$_POST['doc'];



$mpdf = new \Mpdf\Mpdf();

$data = "";
$data .='<img src="../user/images/logo.png" alt="" ><br/>'; 
$data .= "<h1>Your Recipt</h1>";
$data .= "<strong>Your appointment has been confirmed with doctor:</strong> " . $doc . "<br>";
$data .= "<strong>Name</strong> " . $name . "<br>";

$data .= "<strong>Date</strong> " . $date . "<br>";

$data .= "<strong>Time</strong> " . $time . "<br>";

$data .= "<strong>Phone</strong> " . $phone . "<br>";

$data .= "<strong>Note:</strong> " . $note . "<br>";

$data .= "<p>Kindly Try to Reach On time .</p> <br>";
$mpdf->WriteHTML($data);

$pdf=   $mpdf->output("","S"); 

Emails($pdf,$email,$subject,$message,$name);
}

function Emails($pdf,$email,$subject,$message,$name){
    
    //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'medicare146@gmail.com';                     //SMTP username
    $mail->Password   = 'ijzqsgvzxcrzelne';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
   $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //$mail->Port       = 2525; 
    //Recipients
    $mail->setFrom('medicare146@gmail.com', 'Medi-Care');
    $mail->addAddress($email, "user");     //Add a recipient

     $mail->addStringAttachment($pdf, 'recipt.pdf');
    // if(!$mail->Send()){
    //     echo "Mailer Error: " . $mail->ErrorInfo;
    //    }

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = '<img src="../user/images/logo.png" alt="" ><br/>' . $message;
    //$mail->Body    = 'This is the body in plain text for non-HTML mail clients';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    //echo 'Message has been sent';
    $_SESSION['status'] = " Mail sent Succesfully";
    $_SESSION['status_code'] = "success";
    header('location:viewapp.php?msg="sent succesfully"');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


}
?>
