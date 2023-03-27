<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Back 3</title>
</head>

<body style="font-size: 20px;">
	<form action="form.php" method="post">
		<p>
			<label>Пожалуйста, введите Ваше имя:<br><br>
				<input placeholder="Имя" type="text" name="name" value="">
			</label>
		<p>
			<label>Теперь Вашу электронную почту:<br><br>
				<input placeholder="E-mail" type="text" name="email" value="">
			</label>
		</p>
		<p>
			<label>Укажите свой год рождения:<br><br>
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
		<p>Отметьте свой пол:<br><br>
			<label>
				<input type="radio" name="gender" value="man">Мужской
			</label>
			<label>
				<input type="radio" name="gender" value="woman">Женский
			</label>
		</p>
		<p>Укажите количество конечностей:<br><br>
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
			<label>Какую сверхспособность Вы хотите?<br><br>
				<select multiple name="super-powers[]">
					<option value="immortality">Бессмертие</option>
					<option value="walkthrough-walls">Прохождение сквозь стены</option>
					<option value="levitation">Левитация</option>
				</select>
			</label>
		</p>
		<div>
			<p>
				<label>Расскажите немного о себе:<br><br>
					<textarea placeholder="Расскажите о себе" name="biography"></textarea>
				</label>
			</p>
		</div>
		<p>
			<label>
				<input type="checkbox" name="agree">С контранктом и пользовательским соглашением ознакомлен
				(а)
			</label>
		</p>
		<p>
			<input type="submit" value="Отправить и забыть">
		</p>
	</form>
</body>

</html>
