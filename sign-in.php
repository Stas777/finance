<!DOCTYPE HTML>
<html>
    <head>
        <title>Вход</title>
        <link rel="stylesheet" type="text/css" href="css/signin-style.css" media="screen" />
    </head>
    <body id="signin-body">
        <div class="error" style="font-size: larger; text-align: center; margin-top: 50px">
            <?php
            session_start();
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
            ?>
        </div>

        <div id="signin-box">
            <div id="signin-header">
                Вход
            </div>
            <form id="signin-form" method="POST" action="credentials-checking.php">
                Username or Email<br>
                <input id="user" type="text" required="required" name="user" size="45">
                <span class="error">*</span>
                <br>
                Пароль &nbsp;&nbsp;&nbsp;
                <a href="url">(забыли пароль)</a><br>
                <input id="pass" type="password" required="required" name="pass" size="45">
                <span class="error">*</span>
                <br>
                <input id="signin-button" type="submit" name="submit" value="Вход">&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="sign-up.php">(Регистрация)</a><br>
            </form>
        </div>
    </body>
</html>