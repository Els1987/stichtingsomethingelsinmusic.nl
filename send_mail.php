

<?php
$name = $_POST["naam"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$vraag = $_POST["vraag"];

use PHPMailer\PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer (true);
$mail -> isSMTP();
$mail -> SMTPAuth = true;
$mail -> Host = "smtp.gmail.com";
$mail -> SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail -> Port = 587;
//$mail -> Username = "somethingelsinmusic@gmail.com";
//$mail -> Password = "123sEim2024#";

$mail -> setFrom($email, $name);
$mail -> addAddress("somethingelsinmusic@gmail.com", "Stichting Something Els in Music");
$mail -> Subject = "vraag";
$mail -> Body = $vraag;
send();
echo "email verstuurd";
?>

//moet tweestapsautenticatie gmail uitschakelen
//https://www.imarketingonly.com/how-to-use-google-smtp-server-through-php-mailer/
