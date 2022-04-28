<html>
<head><title> Receiving Input </title> </head>
<body>
</body>
</html>
<font size=5>Thank You: Got Your Input.</font>
<?php
$name = $_POST["name"];
$email = $_POST["email"];
$university = $_POST["university"];
$class = $_POST["class"];
$hobby = $_POST["hobby"];
$contact = $_POST["contact"];

// $email = $_GET["email"];
// $contact = $_GET["contact"];
print ("<br>Hello, $name");
print ("<br>Your email is $email");
print ("<br>You are studying at $class, $university");
if ($hobby) {
  $i=1;
            print ("<br>Your hobby is: ");
            foreach ($hobby as $value) {
              echo "<br> $i. $value ";
              $i=$i+1;
          }
          
  }
    
    else{print ("<br>Your hobby is none");}
  

print ("<br> Contact preference is $contact");
?>
