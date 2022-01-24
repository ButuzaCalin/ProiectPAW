<?php
include 'init.php';
$id = $_GET['id'];
$sql = "delete from droid_table where id=$id";
$con->query($sql);
$con->close();
header("location: index.php");
