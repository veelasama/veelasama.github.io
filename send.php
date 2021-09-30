<?php
if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['subject'])) {$message = $_POST['subject'];}
if (isset($_POST['message'])) {$message = $_POST['message'];}

$address = "happyraccoon1@gmail.com";
$sub = "$subject";
$mes = "Автор указал такое имя: $name \nОставил такой E-mail: $email \nСодержание письма: \n$message";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
?>
