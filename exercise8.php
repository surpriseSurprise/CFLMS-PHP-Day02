<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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

$sql = "SELECT publisher_id, pname, paddress, size FROM publisher";
$result = mysqli_query($conn, $sql);
// fetch the next row (as long as there are any) into $row
while($row = mysqli_fetch_assoc($result)) {
       printf("ID=%s %s (%s), %s <br>",
                     $row[ "publisher_id"], $row["pname"],$row["paddress"], $row["size"]);
}
echo  "Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>
</body>
</html>


</body>
</html>

<!-- Display all the records from the MySQL table using PHP and MySQL. -->