<?php

header('Content-Type: text/html; charset=UTF-8');
if (!empty($_POST)) {
	if (empty($_POST["name"])) {
		$errors[] = "Укажите Ваше имя! Это поле не должно быть пустым";
	}
	if (empty($_POST["email"])) {
		$errors[] = "Введите Ваш e-mail! Это поле не должно быть пустым";
	}
	if (empty($_POST["year"])) {
		$errors[] = "Выберите Ваш год рождения! Это поле не должно быть пустым";
	}
	if (!isset($_POST["gender"])) {
		$errors[] = "Выберите пол! Это поле не должно быть пустым";
	}
	if (!isset($_POST["limbs"])) {
		$errors[] = "Выберите кол-во конечностей! Это поле не должно быть пустым";
	}
	if (!isset($_POST["super-powers"])) {
		$errors[] = "Выберите суперспособность! Это поле не должно быть пустым";
	}
	if (empty($_POST["biography"])) {
		$errors[] = "Расскажите что-нибудь о себе! Это поле не должно быть пустым";
	}
} else {
	$errors[] = "Неверные данные для формы!";
}

if (isset($errors)) {
	foreach ($errors as $value) {
		echo "$value<br>";
	}
	exit();
}
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$year = intval(htmlspecialchars($_POST["year"]));
$gender = htmlspecialchars($_POST["gender"]);
$limbs = intval(htmlspecialchars($_POST["limbs"]));
$superPowers = $_POST["super-powers"];
$biography = htmlspecialchars($_POST["biography"]);
if (!isset($_POST["agree"])) {
	$agree = 0;
} else {
	$agree = 1;
}

$serverName = 'localhost';
$user = "u47538";
$pass = "7904823";
$dbName = $user;

$db = new PDO("mysql:host=$serverName;dbname=$dbName", $user, $pass, array(PDO::ATTR_PERSISTENT => true));

$lastId = null;
try {
	$stmt = $db->prepare("INSERT INTO user (name, email, date, gender, limbs, biography, agreement) VALUES (:name, :email, :date, :gender, :limbs, :biography, :agreement)");
	$stmt->execute(array('name' => $name, 'email' => $email, 'date' => $year, 'gender' => $gender, 'limbs' => $limbs, 'biography' => $biography, 'agreement' => $agree));
	$lastId = $db->lastInsertId();
} catch (PDOException $e) {
	print('Error : ' . $e->getMessage());
	exit();
}

try {
	if ($lastId === null) {
		exit();
	}
	foreach ($superPowers as $value) {
		$stmt = $db->prepare("INSERT INTO user_power (id, power) VALUES (:id, :power)");
		$stmt->execute(array('id' => $lastId, 'power' => $value));
	}
} catch (PDOException $e) {
	print('Error : ' . $e->getMessage());
	exit();
}
$db = null;
echo "Данные отправлены! Спасибо)";
