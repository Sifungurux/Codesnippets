<?php
	$theUserName = $_POST["userName"];
	print "<h3>Hello user: $theUserName!</h3>";
	$thePassword = $_POST["password"];
	$theArtistName = $_POST["artistName"];
	print "<h3>You are searching data for: $theArtistName!</h3>";
	
$mySqli = new Mysqli('localhost', $theUserName, $thePassword, 'cd_inventory');

/* check connection by means of the connect_errno property */ 
if ($mySqli->connect_errno) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit(); 
	}
else { 
		echo 'Now connected to MySQL'; echo '<br><br>'; 
	}

	/* Spawn a MySQLi_STMT class object containing the SQL statement */
	if ($stmt = $mySqli->prepare("SELECT artist_id, artist_name, 
place_of_birth FROM artists WHERE ARTIST_NAME =?")) {

	/* bind parameters for ? marker(s) */ 
	$stmt->bind_param("s", $theArtistName); // s for string

	/* execute query */
	$stmt->execute();
	
	/* bind result variables */
	$stmt->bind_result($artist_id, $artist_name, $place_of_birth);

	/* fetch values */
    while ($stmt->fetch()) {
    	printf("Artist: %s %s %s \n", $artist_id, $artist_name, $place_of_birth);
	}												// else emit an error message

                      
	/* close statement */
	$stmt->close();
}
	/* close connection */
	$mySqli->close();
?>