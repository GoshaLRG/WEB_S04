<?php
session_start();

$last_name = isset($_SESSION['last_name']) ? $_SESSION['last_name'] : '';
$first_name = isset($_SESSION['first_name']) ? $_SESSION['first_name'] : '';
$age = isset($_SESSION['age']) ? $_SESSION['age'] : '';

if (empty($last_name) || empty($first_name) || empty($age)) {
    header('Location: forma.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Данные пользователя</title>
</head>
<body>
    <h1>Данные пользователя</h1>
    <p><strong>Фамилия:</strong> <?php echo $last_name; ?></p>
    <p><strong>Имя:</strong> <?php echo $first_name; ?></p>
    <p><strong>Возраст:</strong> <?php echo $age; ?></p>
</body>
</html>