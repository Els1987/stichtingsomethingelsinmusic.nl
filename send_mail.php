

<?php
$name = $_POST["naam"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$vraag = $_POST["vraag"];

require './PHPMailer/PHPMailer.php';
require './PHPMailer/SMTP.php';
require './PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer (true);
$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> Host = "smtp.office365.com";
$mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail -> Port = 587;
//$mail -> Username = "kamehamehae@hotmail.com";
//$mail -> Password = "raoyyrqpyiqcidbs";

$mail -> setFrom($email, $name);
$mail -> addAddress("somethingelsinmusic@gmail.com", "Stichting Something Els in Music");
$mail -> Subject = "vraag";
$mail -> Body = $vraag;
send();
echo "email verstuurd";
?>

//moet tweestapsautenticatie gmail uitschakelen
//https://www.imarketingonly.com/how-to-use-google-smtp-server-through-php-mailer/
