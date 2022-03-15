<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$servername = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"],1);

$active_group = 'default';
$query_builder = TRUE;
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