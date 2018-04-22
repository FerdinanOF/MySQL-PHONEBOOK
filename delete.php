<?php

include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM bukutelpon WHERE id = '$id'";

$res = mysqli_query($link, $sql);

mysqli_close($link);

header('location: baca.php');
exit;