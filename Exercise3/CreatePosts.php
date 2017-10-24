<?php
$USERNAME = $_POST["user"];
$POST = $_POST["post"];
$mysqli = new mysqli('mysql.eecs.ku.edu', 'vtallavajhala', 'P@$$word123', 'vtallavajhala');
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
if($POST == null || $USERNAME == null)
{
  echo ("Invalid post/username");
  exit();
}

//$exist = mysql_query("SELECT * FROM Users WHERE user_id = '$USERNAME'");
$query = "INSERT INTO Posts (author_id, content) VALUES ('$USERNAME','$POST');";
/*if (mysql_num_rows($exist) == 0)
{
  echo("User_ID does not exist");
  exit();
}
*/
if ($mysqli->query($query))
{
  echo ("Post created");
}
else {
  echo ("Post not created");
}
/* close connection */
$mysqli->close();

 ?>
