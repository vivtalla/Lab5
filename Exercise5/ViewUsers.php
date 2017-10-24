<table>
  <th>Users</th>
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
?>
        <tr>
          <td><?php echo$row["user_id"]?></td>
        </tr>
<?php
    }

    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

 ?>
 </table>
