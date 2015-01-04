<?php
$con=mysqli_connect("localhost","root","root","finance");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Perform queries
$result = mysqli_query($con,"SELECT * FROM users WHERE username = '$_POST[user]' AND password = '$_POST[pass]' ");
$count=mysqli_num_rows($result);

// redirect if credentials are valid
if ($count == 1) {
    header("location: main-page.php");
}
else {
    $_SESSION['error'] = "ERROR";
    echo $_SESSION['error'];
    header("location: sign-in.php");
}
mysqli_close($con);
?>