<?php
//connecting to the database
$dbconn = pg_connect("dbname=db_project user=postgres password=Marthaosika@1");

$searchTerm = $_GET['search_term']; //storing the data gotten from the input field

$query = "SELECT * FROM field_info WHERE fullname ILIKE '%$searchTerm%'"; 
//ILIKE operator performs a case-sensitive search for the entered name

$result = pg_query($dbconn, $query); 
//executing query and storing result in variable called $result

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
//using a while loop to echo the results in rows once the full name is searched

pg_close($dbconn);
//closing the database connection
?>
