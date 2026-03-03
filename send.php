<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$to = "yourmail@gmail.com"; // ← сюда свою почту
$subject = "Новая заявка с сайта";

$message = "
Имя: $name
Телефон: $phone
Email: $email
";

$headers = "From: noreply@yoursite.com";

mail($to, $subject, $message, $headers);

header("Location: thankyou.html");

?>