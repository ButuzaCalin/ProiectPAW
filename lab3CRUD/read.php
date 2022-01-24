<?php
require "init.php";

$sql = "select * from droid_table";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
    echo "<tr>";




    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['data'] . "</td>";


    echo '<form class="form-inline m-2" action="update.php" method="POST">';
    echo '<td><input type="text" class="form-control" name="name" value="' . $row['data'] . '"></td>';
    echo '<td><button type="submit" class="btn btn-primary">Update</button></td>';
    echo '<td><input type="hidden" name="id" value="' . $row['id'] . '"></td>';
    echo '</form>';
    echo '<td><a class="btn btn-danger" href="delete.php?id=' . $row['id'] . '" role="button">Delete</a></td>';
    echo "</tr>";
}
$con->close();
