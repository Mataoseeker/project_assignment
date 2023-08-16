<?php
$dbconn = pg_connect("dbname=db_project user=postgres password=Marthaosika@1");
//starting a database connection by connecting to the project db, the user and password

$username = $_POST['username'];
//getting username from form
$email = $_POST['email'];
//getting email from form
$password = $_POST['password'];
//getting password from form

$query = "INSERT INTO db_login_info (username, email, password) VALUES ('$username', '$email', '$password')";
//inserting the data into the database table named db_login_info

$result = pg_query($dbconn, $query);
//executing the query and storing in a variable called result

if ($result) {
    echo "Data saved successfully!";
    header("Location: field.php");
} else {
    echo "Error saving data.";
}
//if the query is executed successfully, the user is redirected to the field.php page

pg_close($dbconn);
//closing the database connection
?>