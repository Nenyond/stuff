<?php 
if (isset($_POST['send-message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $msg = $_POST['message'];
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
        <title>New message from website contact form</title>
  </head>
  <body>
        <h1>" . $subject . "</h1>
        <p>".$msg."</p>
  </body>
  </html>";
  if (mail('techpriest@buffalobattletech.com', $subject, $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
}
