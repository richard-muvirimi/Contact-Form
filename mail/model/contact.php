<?php
//exit on direct file access
defined("MAIL_SECURE") or exit;

include_once "mail.php";

class Contact
{

    private $mail;

    public function __construct($name = "", $phone = "", $email = "", $message = "")
    {

        $this->mail = new Email($name, $phone, $email, $message);
    }

    public function sendMail($toEmail, $CC, $BCC, $subject)
    {

        $valid = $this->isValid();
        if ($valid == true) {

            if ($this->mail->send($toEmail, $CC, $BCC, $subject)) {
                return  array_merge(array("success" => true), $this->returnError("Success!", "Your message has been sent."));
            } else {
                $valid =  $this->returnError("Failed!", "There seems to be a problem sending your message.");
            }
        }

        return array_merge(array("success" => false), $valid);
    }

    private function isValid()
    {
        if (!$this->validateIsName()) {
            return  $this->returnError("Invalid Name", "Only letters and white space allowed");
        }

        if (!$this->validateIsPhone()) {
            return  $this->returnError("Invalid Phone Number", "Only numbers and + allowed");
        }

        if (!$this->validateIsEmail()) {
            return  $this->returnError("Invalid Email", "A valid email address is required");
        }

        if (!$this->validateIsText()) {
            return  $this->returnError("Invalid Message", "You must at least provide a message");
        }

        return true;
    }

    private function returnError($title, $message)
    {
        return compact("title", "message");
    }

    private function validateIsName()
    {

        $this->mail->name = $this->test_input($this->mail->name);
        // check if name only contains letters and whitespace
        return preg_match("/^[a-zA-Z ]*$/", $this->mail->name);
    }

    private function validateIsPhone()
    {

        $this->mail->phone = $this->test_input($this->mail->phone);
        // check if name only contains numbers and +
        return preg_match("/^[0-9+]*$/", $this->mail->phone);
    }

    private function validateIsEmail()
    {

        $this->mail->email = $this->test_input($this->mail->email);
        // check if e-mail address is well-formed
        return filter_var($this->mail->email, FILTER_VALIDATE_EMAIL);
    }

    private function validateIsText()
    {

        $this->mail->message = $this->test_input($this->mail->message);
        // check if not zero length
        return strlen($this->mail->message) > 0;
    }

    private function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}