<?php
$dbconn = pg_connect("dbname=db_project user=postgres password=Marthaosika@1");

$searchTerm = $_GET['search_term'];

$query = "SELECT * FROM field_info WHERE fullname ILIKE '%$searchTerm%'";

$result = pg_query($dbconn, $query);

if ($result) {
    while ($row = pg_fetch_assoc($result)) {
        echo "Name: " . $row['fullname'] . "<br>";
        echo "Mobile: " . $row['mobile'] . "<br>";
        echo "Address: " . $row['address'] . "<br>";
        echo "Gender: " . $row['gender'] . "<br>";
        echo "Occupation: " . $row['occupation'] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No results found.";
}

pg_close($dbconn);
?>
