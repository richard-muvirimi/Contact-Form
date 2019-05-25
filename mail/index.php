<?php

define("MAIL_SECURE", true);

include_once "config.php";
include_once "model/contact.php";

/**
 * You will be amazed at how some of these alledged feedback providers will want to hack this email applet
 * well just sanitize their input and send to recepient
 */
$name = filter_input(INPUT_POST, "name");
$email = filter_input(INPUT_POST, "email");
$phone = filter_input(INPUT_POST, "phone");
$message = filter_input(INPUT_POST, "message");

$contact = new Contact($name, $phone, $email, $message);

/**
 * Fire away
 * defined in config file
 */
$result = $contact->sendMail($toEmail, $CC, $BCC, $subject);

//clear output buffer
if (MAIL_DEBUG && ob_get_contents()) {

    $result["error"] = html_entity_decode(html_entity_decode(trim(strip_tags(ob_get_clean()))));
} else {
    ob_clean();
}


/**
 * return result to client
 */
echo json_encode($result);