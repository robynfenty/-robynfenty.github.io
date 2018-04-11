<html>
<body>

<?php
$servername = "localhost";
$username 	= "root";
$password 	= "";
$db_name    = "textme";
$conn 		= mysqli_connect($servername, $username, $password, $db_name);

//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$username 	= $_POST['username'];
$email   	= $_POST['email'];	
$password 	= $_POST['password'];
$firstname  = $_POST['Firstname'];
$lastname   = $_POST['Lastname'];
// Create connection


$sql = "SELECT FROM signup (`username`, `password`) VALUES ('".$username."', '".$email."', '".$password."', '".$firstname."', '".$lastname."')";
if($conn->query($sql) === true){
	echo '<a href="welcome.html" class="wlcomtxtme">Welcome to TextME!</a>';
} else{
	 die("Failed: " . $conn->error);
}
?>
</body>
</html>