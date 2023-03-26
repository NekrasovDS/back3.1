<!DOCTYPE html>
<html lang="ru">
<head>
	  <meta charset="utf-8">
	  <title>Гиперссылки и формы</title>
</head>

<body>
<h2>Форма</h2>  
  <form action="/" method="POST">

    <label>
      Ф.И.О.:
      <br>
      <input name="field-name-1" value="Введите Ф.И.О.">
    </label>
    <br>

    <label>
      Адрес электронной почты/email:
      <br>
      <input name="field-email" type="email" placeholder="Введите email">
    </label>
    <br>

    <label>
      Дата дня рожденния:
      <br>
      <input name="field-date" value="2022-09-08" type="date">
    </label>
    <br> Пол:

    <br>
    <label>
      <input type="radio" checked="checked" name="radio-group-1" value="Значение1"> Мужской
    </label>
    <label>
      <input type="radio" name="radio-group-1" value="Значение2"> Женский
    </label>
    <br> Количество конечностей:
    <br>
    <label>
      <input type="radio" checked="checked" name="radio-group-2" value="Значение1"> 1
    </label>
    <label>
      <input type="radio" name="radio-group-2" value="Значение2"> 2
    </label>
    <br>
    <label>
      <input type="radio" name="radio-group-2" value="Значение2"> 3
    </label>
    <br>
    <label>
      <input type="radio" name="radio-group-2" value="Значение2"> 4
    </label>
    <br>
    <label>
      <input type="radio" name="radio-group-2" value="Значение2"> Нет в наличии
    </label>
    <br>

    <label>
      Сверхспособности:
      <br>
      <select name="field-name-4[]" multiple="multiple">
        <option value="Значение1">Бессмертие</option>
        <option value="Значение2" selected="selected">Прохождение сквозь стены</option>
        <option value="Значение3" selected="selected">Левитация</option>
      </select>
    </label>
    <br>

    <label>
      Немного о себе (ваша биография):
      <br>
      <textarea name="field-name-2">Я...</textarea>
    </label>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="check-1"> С контрактом ознакомлен(-а)</label>
    <br> Отправка формы:
    <input type="submit" value="Отправить">
      </form>
</body>
</html>
