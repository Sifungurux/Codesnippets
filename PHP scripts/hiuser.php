<html>
<head>
<title>Hi User 3</title>
</head>
<body>
<h1>Hi User 2</h1>
<h3>PHP program that receives a value from "whatsName"</h3>
<?php
$theFirstName = $_POST["firstName"];
print "<h3>$theFirstName!</h3>";

$theFamilyName = $_POST["familyName"];
print "<h3>$theFamilyName!</h3>";

$theStreetName = $_POST["streetName"];
print "<h3>$theStreetName!</h3>";

$theStreetnumber = $_POST["streetnumber"];
print "<h3>$theStreetnumber!</h3>";

$thePostNumber = $_POST["postNumber"];
print "<h3>$thePostNumber!</h3>";

$theCountryName = $_POST["country"];
print "<h3>$theCountryName!</h3>";
?>
</body>
</html>