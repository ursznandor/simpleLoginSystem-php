<?php

include ("dbc.php");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$nick = $_POST['nick'];
$pswd = $_POST['pswd'];

$sql = "INSERT INTO users (firstname, lastname, nick, pswd) VALUES ('$firstname', '$lastname', '$nick', '$pswd')";

$result = mysqli_query($conn, $sql);

if(!$row = mysqli_fetch_assoc($result)){
		echo "Your username or password is incorrect!";

	else
		echo "You are logged in!";
}

header("Location: index.php");