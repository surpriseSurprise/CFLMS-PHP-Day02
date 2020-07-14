<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connect Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "CREATE DATABASE $dbname";
if  (mysqli_query($conn, $sql)) {
   echo "Database $dbname created successfully! \n";
} else {
   echo "Error creating database $dbname: " . mysqli_error($conn);
}
mysqli_close($conn);
?>

?>


</body>
</html>

<!-- Create a Database using PHP and MySQL. -->