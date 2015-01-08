<?php
$con=mysqli_connect("localhost","root","root","finance");

// Check connection
if ($con->connect_error) {
    die("Failed to connect to MySQL: " . $con->connect_error);
}

session_start();
$user_ID = $_SESSION['user_ID'];

$credits = 0;
if (!empty($_POST['credits'])) {
    $credits = $_POST['credits'];
}
$required_payments = 0;
if (!empty($_POST['required_payments'])) {
    $required_payments = $_POST['required_payments'];
}

$sql = "INSERT INTO strategies (strategy_name,user_ID,income_source,daily_outlay,reserve,economy_percent,
  exp_date,credits,required_payments)
VALUES ('$_POST[strategy_name]',$user_ID,'$_POST[income]','$_POST[outlay]','$_POST[reserve]','$_POST[economy_percent]',
  '$_POST[exp_date]',$credits,$required_payments)";

if ($con->query($sql) === TRUE) {
    header("location: main-page.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>