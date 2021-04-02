<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';
require '../vendor/autoload.php';
$mysqli = new mysqli("localhost","root","","notification");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST["firstname"])) {
        $f_nameErr = "Full Name is required";
        echo '<script type="text/javascript">alert("Error:  '.$f_nameErr.'");</script>';
      } else {
        $f_name = $_POST["firstname"];
      }
      if (empty($_POST["lastname"])) {
        $l_naemErr = "Last Name is required";
        echo '<script type="text/javascript">alert("Error:  '.$l_naemErr.'");</script>';
      } else {
        $l_naem = $_POST["lastname"];
      }
      if (empty($_POST["companyname"])) {
        $c_nameErr = "Compant Name is required";
        echo '<script type="text/javascript">alert("Error:  '.$l_naemErr.'");</script>';
      } else {
        $c_name = $_POST["companyname"];
      }
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        echo '<script type="text/javascript">alert("Error:  '.$emailErr.'");</script>';
      } else {
        $email =$_POST["email"];
      }

      if (empty($_POST["phone"])) {
        $phoneErr = "Phone is required";
        echo '<script type="text/javascript">alert("Error:  '.$emailErr.'");</script>';
      } else {
        $phone =$_POST["phone"];
      }

      if (empty($_POST["interest"])) {
        $interestErr = "Interest is required";
        echo '<script type="text/javascript">alert("Error:  '.$emailErr.'");</script>';
      } else {
        $interest =$_POST["interest"];
      }
      if (empty($_POST["message"])) {
        $_messageErr = "Message is required";
        echo '<script type="text/javascript">alert("Error:  '.$emailErr.'");</script>';
      } else {
        $_message = $_POST["message"];
      }
$siu_query = "insert into `contact_us_page`(`f_name`, `l_name`,`c_name`, `email` ,`phone`,`interest`,`message`) values ('" . $f_name . "', '" . $l_naem . "', '" . $c_name . "','" . $email . "','" . $phone . "' ,'" . $interest . "','" . $_message ."');";
mysqli_query($mysqli, $siu_query);
$mail = new PHPMailer(true);
    $mail->Mailer = "smtp";
    $mail->SMTPDebug = 1;                     
    $mail->isSMTP();                                         
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;   
    $mail->SMTPSecure = "tls";
    $mail->Username   = 'usamamahmood009@gmail.com';                
    $mail->Password   = 'ddikpjzzidtipyxr';                              
    $mail->Port       = 587;                                   
    $mail->setFrom('usamamahmood009@gmail.com', $f_name);
    $mail->addAddress('awaisrafai@hotmail.com', 'awais');    
    $mail->isHTML(true);                               
    $mail->Subject = 'Notification';
    $mail->Body    = "Full Name: ".$f_name."<br> Last Name: ".$l_naem. "<br> Company Name: ".$c_name. "<br> Email: ".$email."<br> Phone: ".$phone. "<br> Interest: ".$interest. "<br> Message: ".$_message;
    $mail->send();
    header("location:javascript://history.go(-1)");
}
?>