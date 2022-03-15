<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "littlefoot_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
  }
    $select_db = mysqli_select_db($conn,$db);

    // echo "Connected successfully";
    
// mysqli_close($conn);

?>