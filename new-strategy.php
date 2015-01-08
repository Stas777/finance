<!DOCTYPE html>
<html>
<head>
    <title>Новая стратегия</title>
    <link rel="stylesheet" type="text/css" href="css/signin-style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/signup-style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/newstrategy-style.css" media="screen" />
</head>
<body style="font-family: Geneva; font-size: smaller">
    <div id="signup-box" style="width: 590px">
        <div id="signin-header" style="font-size: 16px">
            Создание новой стратегии
        </div>

        <form id="signup-form" method="POST" style="width: 550px; line-height: 300%" action="add-strategy.php">
            <div class="field">
                <label for="n">Размер постоянного дохода<span class="error">*</span>:</label>
                <input type="number" id="n" required="required" name="income" size="45">
            </div>
            <div class="field">
                <label for="n">Ежедневные затраты<span class="error">*</span>:</label>
                <input type="number" id="n" required="required" name="outlay" size="45">
            </div>
            <div class="field">
                <label for="n">Значение резерва<span class="error">*</span>:</label>
                <input type="number" id="n" required="required" name="reserve" size="45">
            </div>
            <div class="field">
                <label for="n">Желаемый % экономии в месяц<span class="error">*</span>:</label>
                <input type="number" id="n" required="required" name="economy_percent" size="45">
            </div>
            <div class="field">
                <label for="n">Срок действия стратегии<span class="error">*</span>:</label>
                <input type="date" id="n" required="required" name="exp_date" size="45">
            </div>
            <div class="field">
                <label for="n">Текущие кредиты:</label>
                <input type="number" id="n" name="credits" size="45">
            </div>
            <div class="field">
                <label for="n">Обязательные платежи:</label>
                <input type="number" id="n" name="required_payments" size="45">
            </div>
            <div class="field">
                <label for="n">Название вашей стратегии:</label>
                <input type="text" id="n" name="strategy_name" size="45">
            </div>
            <p style="text-align: center; margin-top: 30px">
                <input id="button" type="submit" name="new_strategy" value="Создать стратегию и следовать ей">
            </p>
        </form>
    </div>
</body>
</html>