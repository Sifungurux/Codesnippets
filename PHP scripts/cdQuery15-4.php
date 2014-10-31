<?php
echo 'Connecting to MySQL';
echo '<br><br>';

$conn = mysql_connect('localhost', 'root','') // Connect to MySQL

or die('Connection failed, please, check your data base server connection.');

mysql_select_db('cd_inventory', $conn); //Make sure to use the right database

$query = 'Select COMPACT_DISCS.CD_TITLE, ARTISTS.ARTIST_NAME 
FROM ARTISTS,ARTIST_CDS,COMPACT_DISCS
where COMPACT_DISCS.COMPACT_DISC_ID = ARTIST_CDS.COMPACT_DISC_ID 
AND ARTIST_CDS.ARTIST_ID = ARTISTS.ARTIST_ID';

$resultset = mysql_query($query) or die(mysql_error());

while ($row = mysql_fetch_array($resultset)) {
extract($row);
echo $ARTIST_NAME ;
echo ' - ';
echo $CD_TITLE;
echo '<br>';
}
?>