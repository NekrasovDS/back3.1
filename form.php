<?php
// Отправляем браузеру правильную кодировку,
// файл index.php должен быть в кодировке UTF-8 без BOM.
header('Content-Type: text/html; charset=UTF-8');
print_r($_POST);
// В суперглобальном массиве $_SERVER PHP сохраняет некторые заголовки запроса HTTP
// и другие сведения о клиненте и сервере, например метод текущего запроса $_SERVER['REQUEST_METHOD'].
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
// В суперглобальном массиве $_GET PHP хранит все параметры, переданные в текущем запросе через URL.
if (!empty($_GET['save'])) {
// Если есть параметр save, то выводим сообщение пользователю.
print('Спасибо, результаты сохранены.');
}
// Включаем содержимое файла form.php.
include('form.php');
// Завершаем работу скрипта.
exit();
}
// Иначе, если запрос был методом POST, т.е. нужно проверить данные и сохранить их в XML-файл.

// Проверяем ошибки.
$errors = FALSE;
if (empty($_POST['fio'])) {
print('Заполните имя.<br/>');
$errors = TRUE;
}

if (empty($_POST['email'])) {
print('Заполните email.<br/>');
$errors = TRUE;
}

if (empty($_POST['checkbox']) || !($_POST['checkbox'] == 'on' || $_POST['checkbox'] == 1)) {
print('Подтвердите.<br/>');
$errors = TRUE;
}

if (empty($_POST['abilities'])) {
print('Выберите способности.<br/>');
$errors = TRUE;
}

if (empty($_POST['limbs']) || !is_numeric($_POST['limbs']) || !preg_match('/^\d+$/', $_POST['limbs'])) {
print('Все так плохо?<br/>');
$errors = TRUE;
}

if (empty($_POST['gender'])) {
print('Вы кто?<br/>');
$errors = TRUE;
}

if (empty($_POST['year'])) {
print('Заполните год.<br/>');
$errors = TRUE;
}

// *************
// Тут необходимо проверить правильность заполнения всех остальных полей.
// *************

if ($errors) {
// При наличии ошибок завершаем работу скрипта.
exit();
}
// Сохранение в базу данных.

$user = 'u52803';
$pass = '9294062';
$db = new PDO('mysql:host=localhost;dbname=u52803', $user, $pass, [PDO::ATTR_PERSISTENT => true]);

// Подготовленный запрос. Не именованные метки.
try {
$stmt = $db->prepare("INSERT INTO users SET name = ?, year = ?, biography = ?, email = ?, limbs = ?, gender = ?, checkbox = ?");
$stmt->execute([$_POST['fio'], $_POST['year'], $_POST['biography'], $_POST['email'], $_POST['limbs'], $_POST['gender'], 1]);
} catch (PDOException $e) {
print('Error : ' . $e->getMessage());
exit();
}

$user_id = $db->lastInsertId();

foreach ($_POST['abilities'] as $ability) {
try {
$stmt = $db->prepare("INSERT INTO abilities SET user_id = ?, name = ?");
$stmt->execute([$user_id, $ability]);
} catch (PDOException $e) {
print('Error : ' . $e->getMessage());
exit();
}
}
// stmt - это "дескриптор состояния".

// Именованные метки.
//$stmt = $db->prepare("INSERT INTO test (label,color) VALUES (:label,:color)");
//$stmt -> execute(['label'=>'perfect', 'color'=>'green']);

//Еще вариант
/*$stmt = $db->prepare("INSERT INTO users (firstname, lastname, email) VALUES (:firstname, :lastname, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$firstname = "John";
$lastname = "Smith";
$email = "john@test.com";
$stmt->execute();
*/

// Делаем перенаправление.
// Если запись не сохраняется, но ошибок не видно, то можно закомментировать эту строку чтобы увидеть ошибку.
// Если ошибок при этом не видно, то необходимо настроить параметр display_errors для PHP.
// header('Location: ?save=1');
