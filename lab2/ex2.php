<html><head><title> Date Time Validation</title></head>
<body><font size="5" color="b">
Enter your name and select date and time for the appointment</font>
<br></br><br>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
<table>
<tr>
                <td>Your Name: </td>
                <td><input type="text" size="10" maxlength="15" name="name"></td>
            </tr>
    <tr>
<td>Date: </td>
<td><select name="day">
<?php
for ($i=0; $i<=31; $i++) {
print ("<option>$i</option>");
}
?>
</select>
<select name="month">
<?php
for ($i=0; $i<=12; $i++) {
print ("<option>$i</option>");
}
?>
</select>
<select name="year">
<?php
for ($i=2022; $i<=2032; $i++) {
print ("<option>$i</option>");
}
?>
</select>
</td>
</tr>
<tr>
<td>Time: </td>
<td><select name="hour">
<?php
for ($i=0; $i<=24; $i++) {
print ("<option>$i</option>");
}
?>
</select>
<select name="minute">
<?php
for ($i=0; $i<=60; $i++) {
print ("<option>$i</option>");
}
?>
</select>
<select name="second">
<?php
for ($i=0; $i<=60; $i++) {
print ("<option>$i</option>");
}
?>
</select>
</td>
</tr>
<tr>
<td align="right"> <INPUT TYPE="SUBMIT" VALUE="Submit"></td>
<td align="left"><INPUT TYPE="RESET" VALUE="Reset"></td>
</tr>
</table>


<?php
if (array_key_exists ("name", $_GET)) {
$name = $_GET["name"];
print " Hi $name!<br>";
if (array_key_exists ("day", $_GET)&&array_key_exists ("month", $_GET)&&array_key_exists ("year", $_GET)&&array_key_exists ("hour", $_GET)&&array_key_exists ("second", $_GET)&&array_key_exists ("minute", $_GET)) {
    $day = $_GET["day"];
    $month = $_GET["month"];
    $year = $_GET["year"];
    $hour = $_GET["hour"];
    $minute = $_GET["minute"];
    $second = $_GET["second"];
print"You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year <br></br>";
print"More information<br></br>";
$hour2=$hour%12;
print"In 12 hours, the time and date is $hour2:$minute:$second, $day/$month/$year <br></br>";
  
switch ($month) {
    case 4: print"This month has 30 days!"; break;
    case 6: print"This month has 30 days!"; break;
    case 9: print"This month has 30 days!"; break;
    case 11: print"This month has 30 days!"; break;
    case 2: if($year%4){print"This month has 28 days!";}else{print"This month has 29 days!";};  ; break;
    default: print"This month has 31 days!";
    }
}}

?>
</form>
</body>
</html>