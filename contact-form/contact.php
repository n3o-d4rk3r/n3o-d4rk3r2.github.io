<?php 
$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];
$contact_formcontent="From: 
$contact_name \n Message: $contact_message";
$contact_recipient = "sorkerbappy5001@gmail.com";
$contact_subject = "Contact Form";
$mailheader = "From: $contact_emailemail \r\n";
mail($recipient, $contact_subject, $contact_formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>