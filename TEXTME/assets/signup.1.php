<html>
<head>
    <title>TextMe!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=PacificoAmatic+SC|Caveat|Dokdo|Lobster+Two|Lora|Pacifico|Patua+One|Permanent+Marker|Poppins|Sacramento|Satisfy"> 
  
</head>
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


$sql = "INSERT INTO signup (`username`, `email`, `password`, `Firstname`, `Lastname`) VALUES ('".$username."', '".$email."', '".$password."', '".$firstname."', '".$lastname."')";
if($conn->query($sql) === true){
	echo '<h1>TEXTME</h1>
    <table>
    <tr>
        <td>Chats</td><td>Contacts</td><td>go</td>
    </tr>
    </table>
    <form>
        <input type="email">
        <input type="password">
    </form>';
} else{
	 die("Failed: " . $conn->error);
}
?>
</body>
</html>