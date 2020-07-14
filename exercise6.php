<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: "  . mysqli_connect_error() . "\n");
}
// sql to create table
// $sql = "CREATE TABLE publisher (
// publisher_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// pname VARCHAR(55) NOT NULL,
// paddress VARCHAR(100) NOT NULL,
// size VARCHAR(11)
// )" ;
// if (mysqli_query($conn, $sql)) {
//    echo "Table publisher created successfully"  . "\n";
// } else {
//    echo  "Error creating table: " . mysqli_error($conn) . "\n";
// }
// mysqli_close($conn);
$sql = "INSERT INTO publisher (pname, paddress, size)
VALUES ('Rheinwerk', 'Bonn', 'medium')";
if (mysqli_query($conn, $sql)) {
    echo "New record created.\n";
} else {
   echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
}
mysqli_close($conn);
?>


</body>
</html>

<!-- Create a Database using PHP and MySQL. -->