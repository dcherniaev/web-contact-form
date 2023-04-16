<?php
$hostname = "localhost";
$username = "wcf";
$password = "!QSeFtHu8";
$dbname = "web_contact_form";
$table = "messages";
$is_url_found = false;
$result = '-';

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "CONNECTION ERROR";
    die("Connection failed: " . $conn->connect_error);
}

$issue = $_POST["issue"];
$name =$_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql_insert = "INSERT INTO $table (issue, name, email, message)
            VALUES ('$issue', '$name', '$email', '$message')";

if (mysqli_query($conn, $sql_insert)) {
    $result = "SUCCESS";
} else {
    $result = "ERROR IN INSERT";
}
echo $result;
$conn->close();
