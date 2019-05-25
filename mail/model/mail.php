<?php
//exit on direct file access
defined("MAIL_SECURE") or exit;

class Email
{
    public $name;
    public $phone;
    public $email;
    public $message;
    private $newLine = "\r\n";

    public function __construct($name = "", $phone = "", $email = "", $message = "")
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = wordwrap($message, 50);
    }

    public function send($toEmail, $CC = "", $BCC = "", $subject = "Contact Us Mail")
    {

        $email_template = file_get_contents("template/email.php");

        $message = "";
        $mail = $this;
        eval("\$message = \"$email_template\";");

        $headers = "MIME-Version: 1.0" . $mail->newLine;
        $headers .= "Content-type:text/html;charset=UTF-8" . "$mail->newLine";
        $headers .= 'From: <' . $mail->email . '>';

        if (!empty($CC)) {
            $headers .= $mail->newLine . 'Cc: ' . $CC;
        }

        if (!empty($BCC)) {
            $headers .= $mail->newLine . 'Bcc: ' . $BCC;
        }

        return  mail($toEmail, $subject, $message, $headers);
    }
}