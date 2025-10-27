<?php
$servername = "localhost";
$username = "root"; //root
$password = ""; //""

// Create connection
$conn = mySqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "connected succesfully";

$database="jakczek";

$sql = "CREATE DATABASE $database";
if( mysqli_query($conn, $sql)){
    echo "Database created succesfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

if (mysqli_select_db($conn, $database)) {
    echo "Database $database selected";
} else {
    echo "Error - select database: " . mysqli_error($conn);
}
?>
