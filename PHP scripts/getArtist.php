<?php
		$theUserName = $_POST["userName"];
		print "<h3>Hi there username, $theUserName!</h3>";
		$thePassword = $_POST["password"];
		//print "<h3>Password, $thePassword!</h3>";
 		$theArtistName = $_POST["artistName"]; 
 		print "<h3>You are searching data for, $theArtistName!</h3>";
		
echo '<br>';

$connect = mysql_connect('localhost', $theUserName, $thePassword)
or die('Connection failed, please, check your data base server connection.');

echo 'Connected to MySQL'; echo '<br>';

mysql_select_db('CD_inventory');

$query = "SELECT artist_id, artist_name, place_of_birth FROM artists WHERE
ARTIST_NAME = '$theArtistName'";


 $resultSet = mysql_query($query) or die(mysql_error());

while ($row = mysql_fetch_array($resultSet)) 
	{ 
	extract($row); 
	echo $artist_id; 
	echo ' - '; 
	echo $artist_name; 
	echo ' - '; 
	echo $place_of_birth; 
	echo '<br>'; 
	} 
?>