<html>
<head><title> Receiving Input </title> </head>
<body>
</body>
</html>
<font size=5>Thank You: Got Your Input.</font>
<?php
$email = $_POST["email"];
$contact = $_POST["contact"];
// $email = $_GET["email"];
// $contact = $_GET["contact"];
print ("<br>Your email address is $email");
print ("<br> Contact preference is $contact");
?>