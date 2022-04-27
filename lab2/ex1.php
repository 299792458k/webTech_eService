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
$hobby1 = $_POST["hobby1"];
$hobby2 = $_POST["hobby2"];
$hobby3 = $_POST["hobby3"];
$contact = $_POST["contact"];

// $email = $_GET["email"];
// $contact = $_GET["contact"];
print ("<br>Hello, $name");
print ("<br>Your email is $email");
print ("<br>You are studying at $class, $university");
if ($hobby1) {
    if ($hobby2) {
        if ($hobby3) {
            print ("<br>Your hobby are $hobby1, $hobby2 and $hobby3 ");
          }
        else{print ("<br>Your hobby are $hobby1 and $hobby2");}
      }
      else{if ($hobby3) {
        print ("<br>Your hobby are $hobby1 and $hobby3 ");
      }else{    print ("<br>Your hobby is $hobby1");}
    }
  }
  else{
    if ($hobby2) {
        if ($hobby3) {
            print ("<br>Your hobby are $hobby2 and $hobby3 ");
          }
        else{print ("<br>Your hobby is $hobby2");}
      }
  }

print ("<br> Contact preference is $contact");
?>
