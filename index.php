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
      <input name="fieldname1" value="Введите Ф.И.О.">
    </label>
    <br>

  <!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Веб 3</title>
</head>

<body style="font-size: 20px;">
	<form action="form.php" method="post">
		<p>
			<label>Имя пользователя<br><br>
				<input placeholder="Имя" type="text" name="name" value="">
			</label>
		<p>
			<label>e-mail пользователя<br><br>
				<input placeholder="E-mail" type="text" name="email" value="">
			</label>
		</p>
		<p>
			<label>Год рождения<br><br>
				<select name="year">
					<option value="">Select...</option>
					<?php
					for ($i = 2008; $i >= 1900; --$i) {
						echo "<option value='$i'>$i</option>";
					}
					?>
				</select>
			</label>
		</p>
		<p>Пол<br><br>
			<label>
				<input type="radio" name="gender" value="man">Мужской
			</label>
			<label>
				<input type="radio" name="gender" value="woman">Женский
			</label>
		</p>
		<p>Кол-во конечностей<br><br>
			<label>
				<input type="radio" name="numlimbs" value="1">1
			</label>
			<label>
				<input type="radio" name="numlimbs" value="2">2
			</label>
			<label>
				<input type="radio" name="numlimbs" value="3">3
			</label>
			<label>
				<input type="radio" name="numlimbs" value="4">4
			</label>
		</p>
		<p>
			<label>Сверхспособности<br><br>
				<select multiple name="super-powers[]">
					<option value="immortality">Бессмертие</option>
					<option value="walkthrough-walls">Прохождение сквозь стены</option>
					<option value="levitation">Левитация</option>
				</select>
			</label>
		</p>
		<div>
			<p>
				<label>Биография<br><br>
					<textarea placeholder="Расскажите о себе" name="biography"></textarea>
				</label>
			</p>
		</div>
		<p>
			<label>
				<input type="checkbox" name="agree">С контранктом ознакомлен
				(а)
			</label>
		</p>
		<p>
			<input type="submit" value="Отправить">
		</p>
	</form>
</body>

</html>