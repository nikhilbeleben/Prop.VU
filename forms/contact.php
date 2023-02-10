<?php

if (isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $from = 'From: Prop.vu.com';
  $to = 'lalitbadgujar15@gmail.com';
  $subject =  $_POST['subject'];
  $body = "From: $name\n E-Mail: $email\n Message:\n $message";
  echo ($body);
  // Check if name has been entered
  if (!$_POST['name']) {
    $errName = 'Please enter your name';
  }
  echo ("hello1");
  // Check if email has been entered and is valid
  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
  }
  echo ("hello2");
  //Check if message has been entered
  if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
  }
  echo ("hello3");
  // If there are no errors, send the email
  if (!$errName && !$errEmail && !$errMessage) {
    echo ("hello5");

    if (mail($to, $subject, $body, $from)) {
      echo ("hello7");

      $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
      echo ("hello6");

      $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
  }
  echo ("hello4");
}
