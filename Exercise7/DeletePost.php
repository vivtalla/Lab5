<table>
  <td>Delete Posts</td>
<?php

$mysqli = new mysqli('mysql.eecs.ku.edu', 'vtallavajhala', 'P@$$word123', 'vtallavajhala');
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT author_id, content FROM Posts;";

if ($result = $mysqli->query($query)) {

    /* fetch associative array */
    echo"<tr>
      <th>Authors</th>
      <th>Content</th>
      <th>Delete</th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
?>
        <tr>
          <td><?php echo$row["author_id"]?></td>
          <td><?php echo$row["content"]?></td>
          <td><input type="checkbox" name="contentToDelete[]" value = "<?php echo $row['content']?>"></td>
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
 <html>
 <form action="DeletePostsHelper.php" method="post">
 <input type="submit" value="Submit">
 </form>
 </html>
