<html>
<head> 
<title>Cal php</title> 
</head>
 <body> 
<h1>Cal</h1> 
<h3>PHP program that calculates two numbers"</h3> 
<?php


$num1 = $_POST["num1"];
$num2 = $_POST["num2"]; 

$submit = $_POST["Operator"]; ;


print "<h2>You are doing a $submit!</h2>";

echo "<br>";

switch ($submit) {
    case "Addition":
    	$result = $num1 + $num2;
        print "$num1 + $num2 = $result";
        break;
    case "Subtraction":
    	$result = $num1 - $num2;
    	print "$num1 - $num2 = $result";
        break;
    case "Multiplication":
    	$result = $num1 * $num2;
    	print "$num1 x $num2 = $result";
        break;
    case "Division":
    	$result = $num1/$num2;
    	print "$num1 / $num2 = $result";
        break;
	}
  
?>

</body> 
</html>