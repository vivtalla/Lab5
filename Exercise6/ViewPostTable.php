<table>
  <td>Posts from the User clicked</td>
<?php
$USERNAME = $_POST["user"];
$mysqli = new mysqli('mysql.eecs.ku.edu', 'vtallavajhala', 'P@$$word123', 'vtallavajhala');
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM Posts;";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
      //if($row["author_id"] = $USERNAME)
      //{
?>
        <tr>
          <td><?php echo$row["content"]?></td>
        </tr>
<?php
    //}
}
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

 ?>
 </table>
