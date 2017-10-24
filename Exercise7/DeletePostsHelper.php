<?php
$CONTENT = $_POST['contentToDelete']
$mysqli = new mysqli('mysql.eecs.ku.edu', 'vtallavajhala', 'P@$$word123', 'vtallavajhala');
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "DELETE FROM Posts WHERE content = '$CONTENT'";

/* close connection */
$mysqli->close();

 ?>
