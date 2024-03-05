<?php
require_once("db_con.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM all_user WHERE id = $id");
header("Location:index.php");
?>