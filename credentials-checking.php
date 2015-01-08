<?php
$con=mysqli_connect("localhost","root","root","finance");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Start the session
session_start();

// Perform queries
$result = mysqli_query($con,"SELECT ID FROM users WHERE username = '$_POST[user]' AND password = '$_POST[pass]' ");
$count=mysqli_num_rows($result);

// redirect if credentials are valid
if ($count == 1) {
    $row = $result->fetch_object(); // or $row = $result->fetch_array();
    //Store the username in the session
    $_SESSION['user_ID'] = $row->ID;
    header("location: main-page.php");
}
else {
    $_SESSION['error'] = "Введенные Username или пароль неверны.";
    header("location: sign-in.php");
}
mysqli_close($con);
?>