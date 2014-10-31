<!-- This script is using our custum made classes --> 
<?php 
include("classLib.php"); 
echo "Using class PersonWithConstuctor."; 
echo '<br><br>'; 

$stefan = new PersonWithConstuctor("Stefan Mischook", "195cm", "email@hotmail.dk", 1223);

$Mazda = new car("Blue", 4, 4000, 1000);

echo "Stefan's full name: " . $stefan->get_name(); echo '<br>';
echo "Stefan height is: " . $stefan->get_height(); echo '<br>';
echo "Stefan's Email is: " . $stefan->get_email();echo '<br>';
echo "Stefan's Pin is: " . $stefan->get_pin();echo '<br>';
echo '<br><br>';

echo "Stefan's cars is : " . $Mezda->get_color(); echo '<br>';
echo "Stefan's car has: " . $Mezda->get_seats(); echo "seats"; echo '<br>';
echo "Stefan's max speed is: " . $Mezda->get_MaxSpeed(); echo "km/t"; echo '<br>';
echo "Stefan's fuel level is: " . $Mezda->get_fuelLevel();echo '<br>';
echo '<br><br>';

$stefan->set_email("email@snutsk.dk"); #setting a new email and get it out#
echo "Stefan's email is: " . $stefan->get_email();echo '<br>';

$stefan->set_pin(1486); #setting a new pinkode and get it out#
echo "Stefan's Pin is: " . $stefan->get_pin();echo '<br>';

$stefan->set_height(147); #setting a new height and get it out#
echo "Stefan's height is: " . $stefan->get_height();echo '<br>';

$sl = $stefan->get_name();
 
$nameLength = strlen($sl);
print $nameLength;
echo '<br><br>';

if ($nameLength <= 10 ){
echo $sl;
}
if ($nameLength > 10) {
$nameArray = explode(" ", $sl);
echo $nameArray[0];
}




?>
