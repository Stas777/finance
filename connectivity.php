<?php
$user = 'root';
$password = 'root';
$db = 'finance';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
) or die("Failed to connect to MySQL: " . mysql_error());

/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
    session_start(); //starting the session for user profile page
    if(!empty($_POST['user'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
    {
        $query = mysql_query("SELECT * FROM USERS where username = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
        $row = mysql_fetch_array($query) or die(mysql_error());
        if(!empty($row['userName']) AND !empty($row['pass']))
        {
            $_SESSION['userName'] = $row['pass'];
            echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
        }
        else
        {
            echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
        }
    }
}
if(isset($_POST['submit']))
{
    SignIn();
}
?>