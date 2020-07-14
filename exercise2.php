<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php
$viewer = getenv( "HTTP_USER_AGENT" );
$browser = "An unidentified browser";
if( preg_match( "/MSIE/i", "$viewer" ) )
{
$browser = "Internet Explorer" ;
}
else if( preg_match( "/MSEdge/i", "$viewer"  ) )
{
$browser = "Microsoft Edge";
}
elseif(preg_match('/Chrome/i' , "$viewer"))
{
$browser = 'Google Chrome';
}
else  if( preg_match( "/Mozilla/i", "$viewer" ))
{
$browser = "Mozilla" ;
}
elseif(preg_match('/Safari/i',"$viewer"))
{
$browser = 'Apple Safari';
}
$platform = "An unidentified OS!";
if( preg_match( "/Windows/i", "$viewer" ) )
{
$platform = "Windows!";
}
else if ( preg_match( "/Linux/i", "$viewer"  ) )
{
$platform = "Linux!";
}
else if  ( preg_match( "/Mac/i", "$viewer" ) )
{
$platform = "Mac!";
}
// echo("You are using $browser on $platform");
?>   
</head>
<body>
<form action="exercise2.php" method ="POST">
Name: <input type="text"  name="name" />
Surname: <input type ="text" name="surname" />
<input  type="submit" name="submit"  />
</form>
<?php
if( isset($_POST['submit']))
{
if( $_POST["name" ] || $_POST["surname"] )
{
echo "Welcome ". $_POST[ 'name']. " " . $_POST['surname']."!<br />";
}
else
{
echo  "Please insert your name";
}

}
?>
</body>
</html>

<!-- Create a PHP script which will accept two parameters from the form (name and surname). The user must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname. -->