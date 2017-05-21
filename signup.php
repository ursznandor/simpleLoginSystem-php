<?php

include ("dbc.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nick = $_POST['nick'];
$pswd = $_POST['pswd'];

$sql = "INSERT INTO users (firstname, lastname, nick, pswd) VALUES ('$firstname', '$lastname', '$nick', '$pswd')";

$result = mysqli_query($conn, $sql);

header("Location: index.php");