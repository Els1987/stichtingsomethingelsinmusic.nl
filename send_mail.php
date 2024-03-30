
/*
<?php
$name = $_POST["naam"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$vraag = $_POST["vraag"];

require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require './PHPMailer/Exception.php';

use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

$mail = new PHPMailer (true);
$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> Host = "smtp.office365.com";
$mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail -> Port = 587;
$mail -> Username = "kamehamehae@hotmail.com";
$mail -> Password = "raoyyrqpyiqcidbs";

$mail -> setFrom($email, $name);
$mail -> addAddress("somethingelsinmusic@gmail.com", "Stichting Something Els in Music");
$mail -> Subject = "vraag";
$mail -> Body = $vraag;
send();
echo "email verstuurd";
?>
*/

<?php

/**
 * This example shows settings to use when sending over SMTP with TLS and custom connection options.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
//SMTP::DEBUG_OFF = off (for production use)
//SMTP::DEBUG_CLIENT = client messages
//SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;

//Set the hostname of the mail server
$mail->Host = 'smtp.office365.com';

//Set the SMTP port number:
// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
// - 587 for SMTP+STARTTLS
$mail->Port = 465;

//Set the encryption mechanism to use:
// - SMTPS (implicit TLS on port 465) or
// - STARTTLS (explicit TLS on port 587)
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

//Custom connection options
//Note that these settings are INSECURE
$mail->SMTPOptions = array(
    'ssl' => [
        'verify_peer' => true,
        'verify_depth' => 3,
        'allow_self_signed' => true,
        'peer_name' => 'smtp.office365.com',
        'cafile' => '/etc/ssl/ca_cert.pem',
    ],
);

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = 'kamehamehae@hotmail.com';

//Password to use for SMTP authentication
$mail->Password = 'raoyyrqpyiqcidbs';

//Set who the message is to be sent from
$mail->setFrom("somethingelsinmusic@gmail.com", "Stichting Something Els in Music");

//Set who the message is to be sent to
$mail->addAddress("somethingelsinmusic@gmail.com", "Stichting Something Els in Music");

//Set the subject line
$mail->Subject = 'PHPMailer SMTP options test';



//Send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
