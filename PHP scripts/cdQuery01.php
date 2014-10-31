<?php
echo 'Connecting to MySQL';
echo '<br><br>';
$login = $_POST["userName"];
#$passWord = $_POST["password"];


$conn = mysql_connect('localhost', 'login') // Connect to MySQL
or die('Connection failed, please, check your data base server connection.');

mysql_select_db('cd_inventory', $conn); //Make sure to use the right database
$query = 'SELECT artist_name, place_of_birth, artist_id FROM artists WHERE PLACE_OF_BIRTH LIKE  "%Washington%"
ORDER BY artist_id';

$resultset = mysql_query($query) or die(mysql_error());

while ($row = mysql_fetch_array($resultset)) {
extract($row);
echo $artist_id;
echo ' - ';
echo $artist_name;
echo ' - ';
echo $place_of_birth;
echo '<br>';
}
?>