<select name = "user">
<?php

$mysqli = new mysqli('mysql.eecs.ku.edu', 'vtallavajhala', 'P@$$word123', 'vtallavajhala');
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Users;";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
    echo "<option value = "$row['user_id']">" . $row['user_id'] . "</option>";
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

 ?>
 </select>
<html>
<form action="ViewPostTable.php" method="post">
<input type="submit" value="Submit">
</form>
</html>
