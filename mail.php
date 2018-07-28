<?php

$recepient = "ruslan.gunder@gmail.com";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$s = trim($_POST["s"]);
$time = trim($_POST["time"]);
$message = "Name: $name \nPhone: $phone \nE-mail: $email \nПлощадь: $s \nУдобное время: $time";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
?>