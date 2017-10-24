<?php
$CONTENT = $_POST['contentToDelete']
$mysqli = new mysqli('mysql.eecs.ku.edu', 'vtallavajhala', 'P@$$word123', 'vtallavajhala');
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "DELETE FROM Posts WHERE content = '$CONTENT'";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      //if($row["author_id"] = $USERNAME)
      //{

 echo("$row["post_id"]");
    //}
}
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

 ?>
