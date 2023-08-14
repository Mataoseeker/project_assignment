<?php
$dbconn = pg_connect("dbname=db_project user=postgres password=Marthaosika@1");

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];


$query = "INSERT INTO db_login_info (username, email, password) VALUES ('$username', '$email', '$password')";

$result = pg_query($dbconn, $query);

if ($result) {
    echo "Data saved successfully!";
    header("Location: field.php");
} else {
    echo "Error saving data.";
}

pg_close($dbconn);
?>