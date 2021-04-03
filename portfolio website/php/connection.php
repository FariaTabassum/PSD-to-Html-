<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'contactdb';
$conn=new mysqli('localhost', $username, $password, $dbname) or die("Unable to connect");
     // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>