<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Swift_Mailer;
use Swift_Message;
use Swift_SmtpTransport;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ContactMail(Request $req)
    {

        // list($name, $email) = array_values($req->input());
        extract($req->input(), EXTR_SKIP);

/*
// Create a new PHPMailer instance
$mail = new PHPMailer(true);

// Enable SMTP
$mail->isSMTP();

// Set SMTP settings
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'accforswiftmailer@gmail.com';
$mail->Password = 'rwquhztsnrobavvu';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set email content and other settings
$mail->setFrom('qaz@gmail.com', 'Your Name');
$mail->addAddress('qazitalha.4595@gmail.com');
$mail->Subject = 'Subject';
$mail->Body = 'Email body';

// Send the email
if ($mail->send()) {
    echo 'Email sent successfully';
} else {
    echo 'Failed to send email. Error: ' . $mail->ErrorInfo;
}



        return false; */
            // Create the Mailer using the transport
            $mailer = new Swift_Mailer((new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))
            ->setUsername('accforswiftmailer@gmail.com')
            ->setPassword('rwquhztsnrobavvu'));
            // Send the email
            $result = $mailer->send((new Swift_Message($subject))
            ->setFrom(['your_email@example.com' => 'Zinfotec'])
            ->setTo(["mail2zinfotec@gmail.com"])
            ->setBody($message."<br/> Name:". $name."<br/>Email:".$email, 'text/html'));
            if ($result) {
                return response()->json(['message' => 'Email sent successfully']);
            } else {
                return response()->json(['message' => 'Failed to send email'], 500);
            }




    }
  /*   public function __construct()
    {
        //
    } */

    //
}
