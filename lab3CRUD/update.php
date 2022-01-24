<?php
  include 'init.php';
  $id = $_POST['id'];
  $name = $_POST['name'];
  $sql = "update droid_table set data='$name' where id=$id";
  $result = $con->query($sql);
  $con->close();
  header("location: index.php");
