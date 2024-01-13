
<?php
error_reporting(E_ERROR);
    $servername = "localhost";
    $username = "u723503874_leonardo";
    $password = "Freenow32!";
    $db = "u723503874_territorio";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
?>
