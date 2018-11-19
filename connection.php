<?php
$user = 'root';
$pass = '';
$db = 'animeru';

$db = new mysqli('localhost', $username, $pass, $db) or die ("Unable to connect");

echo "great work!";
?>