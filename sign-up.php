<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/signin-style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/signup-style.css" media="screen" />
</head>
<body id="signin-body">

<div id="signup-box">
    <div id="signin-header">
        Создание аккаунта
    </div>
    <form id="signup-form" method="POST">
        <img src="resources/girl.png" alt="Smiley face"
             style="float:right; width:183px; height:419px">
        Username<br>
        <input id="user" type="text" required="required" name="user" size="45">
        <span class="error">*</span><br>
        <p>Так будет отображаться ваше имя на сайте</p>
        E-mail Address<br>
        <input id="email" type="email" required="required" name="email" size="45">
        <span class="error">*</span><br>
        <p>Мы обещаем никому не показывать ваш электронный адрес</p>

        <div id="disclamer">
            Нажимая на кнопку "Создать аккаунт", расположенную снизу, вы соглашаетесь с нашими
            <a href="url">Условиями обслуживания</a>
            и нашей <a href="url">Политикой конфиденциальности</a>
        </div>
        <p style="text-align: center;">
            <input id="signup-button" type="submit" name="submit" value="Создать аккаунт">
        </p>
    </form>
</div>
</body>
</html>