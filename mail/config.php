<?php
//exit on direct file access
defined("MAIL_SECURE") or exit;

/**
 * The email address to send mail to
 * Can be comma separated for example
 * @example someone@mail.com, someoneelse@mail.com
 */
$toEmail = "someone@mail.com";

/**
 * If you want to recognise these mails amongst your plethora of mail, then set this to something that will help you recognise mail from this applet
 */
$subject = "Some mail from contact us";

/**
 * Well its mail cc (can be comma separated for multiple mail)
 * @example someone@mail.com, someoneelse@mail.com
 */
$CC = "";

/**
 * and mail Bcc (can be comma separated for multiple mail)
 * @example someone@mail.com, someoneelse@mail.com
 */
$BCC = "";

/**
 *  Debug mode true or false
 */
define("MAIL_DEBUG", true);