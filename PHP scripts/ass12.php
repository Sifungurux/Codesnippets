<!DOCTYPE html>
<html>
<head>
<title>Hi User 3</title>
</head>
<body>
<h1>SQL Query for assignment 12</h1>
<h3>PHP program that receives a value from "ass12.html"</h3> 
<?php
    $userName = $_POST["userName"];
	print "<h3>Loged in as: $userName</h3>"; 
 

echo '<br><br>';

$conn = mysql_connect('localhost', "$userName",'') 
// Connect to MySQL
// I have no password set for my database, therefore no §password in the mysql_connect
or die('Connection failed, please, check your data base server connection.');

mysql_select_db('cd_inventory', $conn); 
// Make sure to use the right database

$query = 'SELECT artist_name, place_of_birth FROM artists WHERE artist_id>2001 
ORDER BY artist_name';

// Exercise 15-1
// Change Listning 15-1 cdQuery01.php to also print out the artist_id before each artist. 
// E.g.: 2002 - Joni Mitchell - Fort MacLeod, Alberta, Canada

$resultset = mysql_query($query) or die(mysql_error());
while ($row = mysql_fetch_array($resultset)) {
extract($row);
echo $artist_name;
echo ' - ';
echo $place_of_birth;
echo '<br>';
}
?>
</body>
</html>