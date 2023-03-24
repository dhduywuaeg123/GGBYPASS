<?php

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "revoc114@gmail.com"; // Your email address
  $subject = "Contact Form Submission: " . $subject;
  $message = "You have received a new message from your website.\n\n". "Name: " . $name . "\nEmail: " . $email . "\n\nMessage: " . $message;

  $headers = "From: noreply@example.com" . "\r\n" .
  "CC: somebodyelse@example.com";

  if(mail($to, $subject, $message, $headers)) {
    echo "<script>alert('Thank you for contacting us!');</script>";
  } else {
    echo "<script>alert('Failed to send the message. Please try again later.');</script>";
  }
}

?>