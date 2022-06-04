<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$messege = $_POST['messege'];

$mailheader = "From:".$name."<".$email.">"/r/n;

$recipient ="rhemanshaikh2282@gmail.com";

mail($recipient, $subject, $messege, $mailheader);
or die("Error!!");

echo'



 <!DOCTYPE html>
 <html>
 
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title></title>
 </head>
 
 <body>
     <p>it worked</p>
 </body>
 
 </html>
   


'
?>
