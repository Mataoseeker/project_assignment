<?php
$dbconn = pg_connect("dbname=db_project user=postgres password=Marthaosika@1");
//starting a database connection by connecting to the project db, the user and password

$fullname = $_POST['fullname'];
//getting data from form
$mobile = $_POST['mobile'];
//the mobile number of the customer
$address = $_POST['address'];
//the address of the customer
$gender = $_POST['gender'];
//the gender of the customer
$occupation = $_POST['occupation'];
//the occupation of the customer

$query = "INSERT INTO field_info (fullname, mobile, address, gender, occupation) VALUES ('$fullname', '$mobile', '$address', '$gender', '$occupation')";
//inserting the data into the field_info table

$result = pg_query($dbconn, $query);
//executing the query

if ($result) {
    echo "Data saved successfully!";
    header("Location: search.php");
} else {
    echo "Error saving data.";
}
//if the query is executed successfully, the data is saved and the user is redirected to the search page

pg_close($dbconn);
//closing the database connection
?>
