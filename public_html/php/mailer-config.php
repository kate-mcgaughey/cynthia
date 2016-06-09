<?php

/**
 * mailer-config.php
 * This file contains your reCAPTCHA keys, and your recipients email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * This file has been gitignored!
 **/

// your Google reCAPTCHA keys here
$siteKey = '6LdPBCITAAAAAGhdX0mJM4OcGsUgqYoCrXsx3AP9';
$secret = '6LdPBCITAAAAAExXOTmXEnvuR23y6h4JEYBRZ5pu';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["cmhodgson228@gmail.com" => "Cynthia Hodgson", "therealmcgaughey@gmail.com" => "Kate McGaughey"];