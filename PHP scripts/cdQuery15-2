<?php
echo 'Connecting to MySQL';
echo '<br><br>';

$conn = mysql_connect('localhost', 'root','') // Connect to MySQL

or die('Connection failed, please, check your data base server connection.');

mysql_select_db('cd_inventory', $conn); //Make sure to use the right database

$query = 'Select ARTIST_NAME, artist_name, place_of_birth from ARTISTS where ARTIST_NAME LIKE "%i%" ORDER BY artist_id';

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