<?php
$USERNAME = $_POST["user"];

$mysqli = new mysqli('mysql.eecs.ku.edu', 'vtallavajhala', 'P@$$word123', 'vtallavajhala');
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if($USERNAME == null)
{
  echo ("Nothing has been entered.");
  exit();
}

$exist = mysql_query("SELECT * FROM Users WHERE (user_id = '$USERNAME')");
$query = "INSERT INTO Users (user_id) VALUES ('$USERNAME');";

if (mysql_num_rows($exist) > 0)
{
  echo("User_ID already exists");
  exit();
}
if ($mysqli->query($query))
{
  echo ("user added to table");
}
else {
  echo ("User_ID already exists");
}
/* close connection */
$mysqli->close();

 ?>
