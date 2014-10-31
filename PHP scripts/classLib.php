<!-- This is the file that will hold our classes --> 
<?php 


// This class has a constructor 
class PersonWithConstuctor { 
var $name; 

function __construct($persons_name, $height, $email, $pin) { 
$this->name = $persons_name;
$this->height = $height;
$this->email = $email; 
$this->pin = $pin; 
} 
function set_name($new_name) { 
$this->name = $new_name; 
} 
function get_name() { 
return $this->name; 
} 
function set_height($new_height){ 
$this->height = $new_height;
}
function get_height() { 
return $this->height;
}
function set_email($new_email){ 
$this->email = $new_email;
}
function get_email() { 
return $this->email;
}
function set_pin($new_pin){ 
$this->pin = $new_pin;
}
function get_pin() { 
return $this->pin;
}
}

class car {
 
function __construct($color, $seats, $MaxSpeed, $fuelLevel){
$this->color = $color;
$this->seats = $seats;
$this->MaxSpeed = $Maxspeed;
$this->fuelLevel = $fuelLevel;

function set_color($new_color) { 
$this->color = $new_color; 
} 
function get_color() { 
return $this->color; 
} 
function set_seats($new_seats){ 
$this->seats = $new_seats;
}
function get_seats() { 
return $this->seats;
}
function set_M($new_MaxSpeed){ 
$this->MaxSpeed = $new_MaxSpeed;
}
function get_MaxSpeed() { 
return $this->MaxSpeed;
}
function set_fuelLevel($new_fuelLevel){ 
$this->fuelLevel = $new_fuelLevel;
}
function get_fuelLevel() { 
return $this->fuelLevel;
}
}
}
class Person { 
private $name; 
private $height;
private $email;
private $pin;

function set_name($new_name) { 
$this->name = $new_name; 
} 
function set_height($new_hight){ 
$this->height = $new_height;
}
function set_email($new_email){ 
$this->email = $new_email;
}
function set_pin($new_pin) { 
$this->pin = $new_pin; 
} 
	  
function get_name() { 
return $this->name; 
} 
function get_height(){ 
return $this->height;
}
function get_email(){ 
return $this->email;
}
function get_pin() { 
return $this->pin; 
}
} 
?>
