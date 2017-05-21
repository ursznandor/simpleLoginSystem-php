<?php

include ("dbc.php");

$nick = $_POST['nick'];
$pswd = $_POST['pswd'];

$sql = "SELECT * from users WHERE nick='$nick' AND pswd='$pswd";

$result = mysqli_query($conn, $sql);

header("Location: index.php");