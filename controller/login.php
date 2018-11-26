<?php
   include_once("../model/connection.php");

   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);

   //session_start();
   
  /*if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
	  //the user imput
      
      
      // If result matched, table row must be 1 row
		
      if($count == 1) {
         session_register("emailAddress");
         $_SESSION['login_user'] = $emailAddress;
         header('Location: ./templates/index.tpl');
	     
      }
	  
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }*/
?>
