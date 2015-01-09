<!DOCTYPE html>
<html>
<head>
    <title>Стратегии</title>
    <link rel="stylesheet" type="text/css" href="css/signin-style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/strategy-style.css" media="screen" />
    <script type="text/javascript" src="js/functions.js"></script>
</head>
<body id="signin-body">
    <nav>
    <ul class="main-menu">
        <li><a href="main-page.php">Главная страница</a></li>
        <li><a href="#news">Новости</a></li>
        <li><a href="strategy.php">Стратегии</a></li>
        <li><a href="#progress">Достижения</a></li>
        <li><a href="#income">Доходы</a></li>
        <li><a href="#charges">Расходы</a></li>
        <li><a href="#statistics">Статистика</a></li>
        <li><a href="#subscription">Подписки</a></li>
        <li><a href="#personal-cabinet">Личный кабинет</a></li>
    </ul>
    </nav>

    <?php
    $con = mysqli_connect("localhost","root","root","finance");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    session_start();
    $user_ID = $_SESSION['user_ID'];
    $query = "SELECT * FROM strategies WHERE user_ID =  $user_ID ORDER BY ID DESC";
    $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);
    $row = $result->fetch_object();

    if ($row == null) {
        $row = new stdClass();
        $row->strategy_name = "У вас нет созданной стратегии";
        $row->income_source = "-";
        $row->daily_outlay = "-";
        $row->reserve = "-";
        $row->economy_percent = "-";
        $row->exp_date = "";
        $row->credits = "-";
        $row->required_payments = "-";
    }
    mysqli_close($con);
    ?>

    <div id="main-box">
        <p style="text-align: center;">
            Пользовательская стратегия
            <p style="font-size: larger; text-align: center; margin-top: -15px; margin-bottom: 40px">
            <?php echo $row->strategy_name; ?>
            </p>
        </p>

        <div style="float: left; width: 50%; padding-left: 20px">
            <table id="strategy-table">
                <tr>
                    <th>Subject</th>
                    <th>Value</th>
                </tr>
                <tr>
                    <td>Размер прибыли пользователя</td>
                    <td><?php echo $row->income_source; ?></td>
                </tr>
                <tr>
                    <td>Ежедневные затраты</td>
                    <td><?php echo $row->daily_outlay; ?></td>
                </tr>
                <tr>
                    <td>Значение резерва</td>
                    <td><?php echo $row->reserve; ?></td>
                </tr>
                <tr>
                    <td>Желаемый % экономии в месяц</td>
                    <td><?php echo $row->economy_percent; ?></td>
                </tr>
                <tr>
                    <td>Срок действия стратегии</td>
                    <td> до
                        <?php
                        if ($num > 0) {
                            $time = strtotime($row->exp_date);
                            $myFormatForView = date("d/m/Y", $time);
                            echo $myFormatForView;
                        }
                        else {
                            echo "-";
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Кредиты</td>
                    <td><?php echo $row->credits; ?></td>
                </tr>
                <tr>
                    <td>Обязатеьные платежи</td>
                    <td><?php echo $row->required_payments; ?></td>
                </tr>
            </table>
        </div>
        <div style="padding-left: 490px">
            <?php
            if ($num > 0) {
                echo "<button type = 'button' class='button'>". "Изменить стратегию" ."</button >&nbsp;";
            }
            ?>
            <button type="button" class="button" onclick="newStrategyPopup(); reloading()">Новая стратегия</button>

            <div style="font-size: smaller; color: GrayText; margin-top: 35px; padding-right: 30px">
                <?php
                if ($num > 0) {
                    echo "Данная стратегия вычитает из регулярного ежемесячного дохода обязательные платежи
                    (такие как: коммунальные платежи, оплата услуг связи, оплата за обучение и т . д .)
                    и предлагает пользователю из оставшейся суммы тратить 20 % на питание, 15 % на досуг,
                    10 % на одежду, 15 - 20 % на здоровье и спорт.";
                }
                ?>
            </div>
        </div>
    </div>

    <script>
        function reloading() {
            window.location.reload(true);
        }
    </script>

</body>
</html>