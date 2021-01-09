<?php
}
else
}
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
if (($name=="")||($email=="")||($message==""))
{
echo "All fields are required, please fill <a href=\"\">the form</a> again.";  
}
else
$from="From: $name\r\nReturn-path: $email";
$subject="Message sent using your contact form";
mail("sorkerbappy5001@gmail.com", $subject, $message, $from);
echo "Email sent!";
}
}
?>