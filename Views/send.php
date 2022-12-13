<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
?>

<?php
if(isset($_POST['message']) && isset($_POST["subject"]))
    {
    // $email   = $_POST['email'];
    $subject = $_POST['subject'];
    $body    = $_POST['message'];

    $mail = new PHPMailer(true);
    // var_dump($mail);
    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "mohamedkhalil.ouelsleti@esprit.tn";
    $mail->Password = 'ycbqmbersjmjkdrx';
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl"; //tts

    //email settings
    $mail->isHTML(true);
    $mail->setFrom("mohamedkhalil.ouelsleti@esprit.tn");
    $mail->addAddress("khalilouesleti951@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $body;

    if($mail->send()){
        $status = "success";
        $response = "Email is sent!"; 
        header('Location: ../index.php');       
    }
    else
    {
        $status = "failed";
        $response = "Something is wrong: <br>" . $mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
    
}else {
        echo "<script>Missing Info</script?";
    }

?>