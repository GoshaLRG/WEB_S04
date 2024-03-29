<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['age'] = $_POST['age'];
    header('Location: output.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ФИВ</title>
</head>
<body>
    <form method="post">
        <label for="last_name">Фамилия:</label>
        <input type="text" name="last_name" id="last_name" required>
        <br>
        <label for="first_name">Имя:</label>
        <input type="text" name="first_name" id="first_name" required>
        <br>
        <label for="age">Возраст:</label>
        <input type="number" name="age" id="age" required>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>