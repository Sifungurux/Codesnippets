<html>
<head>
<title>Welcome to Our Web Site</title>
</head>
<body>
<h1>
This is my first php page!
<?php echo '<BR><BR>';
if (date('G') < 12) {
echo 'Good Morning!';
} else {
echo 'Welcome. The time is after 12!';
}
?>
</h1>
<p>Rest goes here...</p>
</body>
</html>