<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title>Web3</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
    <div class="main">
    <h1>Форма</h1>
    
    <form action="index.php" method="POST">
            <p>
                Имя:
                <input name="name" placeholder="Введите имя" />
            </p>

            <p>
                E-mail:
                <input name="email" type="email" placeholder="Введите почту">
            </p>

            <p>
                Год рождения:
                <select id="yearB" name="year"></select>
            </p>

            <p>
                Пол:
                <input type="radio" name="radio-1" checked="checked" value="male" />
                Мужской
                <input type="radio" name="radio-1" value="female" />
                Женский
            </p>

            <p>
            Сколько конечностей?
                
                    <input type="radio" name="radio-2" checked="checked" value="4" />
                    4

                    <input type="radio" name="radio-2" value="3" />
                    3

                    <input type="radio" name="radio-2" value="2" />
                    2

                    <input type="radio" name="radio-2" value="1" />
                    1

                    <input type="radio" name="radio-2" value="0" />
                    0
                
            </p>

            <p>
                Сверхспособности?
                
                    <select name="super" multiple="multiple">
                    <option value="inv" selected="selected">Бессмертие</option>
                    <option value="walk">прохождение сквозь стены</option>
                    <option value="fly">левитация</option>
                    </select>
                
            </p>

            <p>
                Биография?
                <textarea name="bio"></textarea>
            </p>

            <p>
                <input type="checkbox" name="check1" /> С контактом ознакомлен(а)
            </p>

            <p>
            Отправка формы:
            <input type="submit" value="Отправить" />
            </p>
        </form>
    </div>
    <script type="text/javascript">
        window.onload = function () {
        var yearB = document.getElementById("yearB");
        var currentYear = (new Date()).getFullYear();
        for (var i = 1950; i <= currentYear; i++) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            yearB.appendChild(option);
        }
            };
    </script>
</body>