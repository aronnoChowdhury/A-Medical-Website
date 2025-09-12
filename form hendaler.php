<?php
$name = $_POST['name'];
$visitir_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['massage'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New From Sumission';

$email_body = "User Name: $name.\n";
              "User Email: $name.\n";
              ":Subject $name.\n";
              "User Message: $name.\n";

$to = 'aronnoahamed55@gmail.com';

$heahers = "From: $email_from\r\n";

$heahers = "Reply-To: $visitor_from\r\n";

mail($to,$email_subject,$email_body,$heahers);

header("Location: contect.html");


?>