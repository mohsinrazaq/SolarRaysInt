<?php
     if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $number = $_POST['user_number'];
    $message = $_POST['user_message'];
 $mailto = " email adress where you want to send email"
            e.g "mohsinrazzaq25@gmail.com";
 $subject = "Response from website or can be any";
 $headers = " from :" .$email; 
 $txt = "you have received an email from"  .$username 
    ."\n\n" ."Email of the sender is" .$email ."\n\n"
    ."Contact of sender is :" .$number ."\n\n" ."message is :" .$message; 
 $email($mailto, $subject, $txt, $headers); 
 header("location:index.html"); 
 }
?> 
