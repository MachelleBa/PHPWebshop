<?php
$servername = 'www.server.infhaarlem.nl';
$user = 's613954_machelle';
$pass = 'H39;L@Z!am';
$db = 's613954_dbphp';

$db = new mysqli($servername, $user, $pass, $db) or die ("Unable to connect");

echo "connection successful!";

/*function login('email', 'password')
{
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		 
	  $emailAddress = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
	  //query to see if the user exists
      $sql = "SELECT id FROM user WHERE email = '$emailAddress' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
	 $count = mysqli_num_rows($result);
	}
}*/

?>