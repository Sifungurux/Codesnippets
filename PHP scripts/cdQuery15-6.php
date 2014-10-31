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

$query = 'select ARTIST_NAME FROM ARTISTS  WHERE ARTIST_ID = 2001';  

$resultset = mysql_query($query) or die(mysql_error());

while ($row = mysql_fetch_array($resultset)) {
extract($row);
echo 'Deleting ';
echo $ARTIST_NAME ;
echo '<br>';
}

$query1 = 'DELETE FROM ARTIST_CDS  WHERE ARTIST_CDS.ARTIST_ID = 2001';
mysql_query($query1) or die(mysql_error());
$query2 = 'DELETE FROM ARTISTS WHERE ARTISTS.ARTIST_ID = 2001';
mysql_query($query2) or die(mysql_error());s
// Exercise 15-1
// Change Listning 15-1 cdQuery01.php to also print out the artist_id before each artist. 
// E.g.: 2002 - Joni Mitchell - Fort MacLeod, Alberta, Canada


?>
</body>
</html>