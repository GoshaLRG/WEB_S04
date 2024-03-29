<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $string = $_POST['text'];

    $word_count = str_word_count($string);
    $char_count = strlen($string);
} 
else 
{
    $string = '';
    $word_count = 0;
    $char_count = 0;
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Счетчик слов и символов</title>
</head>
<body>
    <form method="post">
        <textarea name="text"><?php echo $string; ?></textarea>
        <br>
        <button type="submit">Cосчитать слова и символы</button>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
        <p>Количество слов: <?php echo $word_count; ?></p>
        <p>Количество символов: <?php echo $char_count; ?></p>
    <?php endif; ?>
</body>
</html>