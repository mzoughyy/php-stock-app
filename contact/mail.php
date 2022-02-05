<?php
use PHPMailer\PHPMailer\PHPMailer;
if(isset($_POST['name']) && isset($_POST['mail'])){
    $name=$_POST['name'];
    $email=$_POST['mail'];
    $subject=$_POST['subject'];
    $msg=$_POST['msg'];

    require_once "PHPMailer\PHPMailer.php";
    require_once "PHPMailer\SMTP.php";
    require_once "PHPMailer\Exception.php";
    $mail = new PHPMailer();

    //SMTP setup
    $mail->isSMTP();
    $mail->Host="smtp.gmail.com";
    $mail->SMTPAuth=true;
    $mail->Username="aminelaymoun@gmail.com";
    $mail->Password="12Avril1987";
    $mail->Port=465;
    $mail->SMTPSecure="ssl";

    //email setting
    $mail->isHTML(true);
    $mail->setFrom($email,$name);
    $mail->addAddress("aminelaymoun@gmail.com");
    $mail->Subject=("$email($subject)");
    $mail->msg=$msg;

    if($mail->send()){
        $status="success";
        $response="Email sent.";

    }else{
        $status="failed";
        $response="something went wrong: <br>" . $mail->ErrorInfo;

    }
exit (json_encode(array("status"=>$status, "response"=>$response)));
    }

?>