<?php
$dbconn = pg_connect("dbname=db_project user=postgres password=Marthaosika@1");

$fullname = $_POST['fullname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$occupation = $_POST['occupation'];

$query = "INSERT INTO field_info (fullname, mobile, address, gender, occupation) VALUES ('$fullname', '$mobile', '$address', '$gender', '$occupation')";

$result = pg_query($dbconn, $query);

if ($result) {


    echo "Data saved successfully!";
    header("Location: search.php");
} else {
    echo "Error saving data.";
}

pg_close($dbconn);
?>
