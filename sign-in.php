<!DOCTYPE HTML>
<html>
    <head>
        <title>Вход</title>
        <link rel="stylesheet" type="text/css" href="css/signin-style.css" media="screen" />
    </head>
    <body id="signin-body">

        <?php
            // define variables and set to empty values
            $userErr = $passErr = "";
            $user = $pass = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
               if (empty($_POST["user"])) {
                 $userErr = "Поле \"Username or Email\" обязательно для заполнения";
               } else {
                 $user = test_input($_POST["user"]);
               }

               if (empty($_POST["pass"])) {
                 $passErr = "Поле \"Пароль\" обязательно для заполнения";
               } else {
                 $pass = test_input($_POST["pass"]);
               }
            }

            function test_input($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
            }
        ?>

        <div id="signin-box">
            <div id="signin-header">
                Вход
            </div>
            <form id="signin-form" method="POST">
                Username or Email<br>
                <input id="user" type="text" name="user" size="45">
                <span class="error">* <?php echo $userErr; ?></span>
                <br>
                Пароль &nbsp;&nbsp;&nbsp;
                <a href="url">(забыли пароль)</a><br>
                <input id="pass" type="password" name="pass" size="45">
                <span class="error">* <?php echo $passErr;?></span>
                <br>
                <input id="signin-button" type="submit" name="submit" value="Вход">&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="sign-up.php">(Регистрация)</a><br>
            </form>
        </div>
    </body>
</html>