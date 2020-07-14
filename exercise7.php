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

$pname = $_POST['pname'];
$paddress = $_POST[ 'paddress'];
$size = $_POST['size'];
// attempt insert query execution
$sql = "INSERT INTO publisher (pname, paddress, size) VALUES ('$pname', '$paddress', '$size')";
if (mysqli_query($conn, $sql)) {
    echo "<h1>New record created.<h1>";
} else {
    echo "<h1>Record creation error for: </h1>" .
         "<p>"  . $sql . "</p>" .
         mysqli_error($conn);
}
mysqli_close($conn);
echo  "</body></html>";
?>


</body>
</html>

<!-- Create a form which will insert data into MySQL table using PHP and MySQL. -->