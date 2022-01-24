<?php
require "init.php";
$data = $_POST["data"];
$sql_query = "INSERT INTO `droid_table`(`data`) VALUE ('$data')";
$result = mysqli_query($con, $sql_query);

header("location: index.php");
mysqli_close($con);
