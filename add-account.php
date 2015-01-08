<?php
$mysqli = new mysqli("localhost", "root", "root", "finance");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Соединение не установлено: %s\n", mysqli_connect_error());
    exit();
}

$query = "INSERT INTO users (username, password, email)
VALUES ('$_POST[user]', '$_POST[pass]', '$_POST[email]')";

$mysqli->query($query);

//Start the session
session_start();
//Store the user_ID in the session
$_SESSION['user_ID'] = $mysqli->insert_id;

header("location: main-page.php");

$mysqli->close();
?>