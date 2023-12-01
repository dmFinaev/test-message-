<?php
require "./app/config.php";
$message_id = $_GET['id'];
$message = mysqli_query($induction, "SELECT * FROM `messages` WHERE `id`= '$message_id'");
$message = mysqli_fetch_assoc($message);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Изменить</h2>
    <form action="/app/update.php" method="POST">
        <h4>Заголовок</h4>
        <input type="hidden" name="id" value="<?= $message['id']; ?>">
        <input type="text" name="title" value="<?= $message['title']; ?>">
        <h4>Автор</h4>
        <input type="text" name="author" value="<?= $message['author']; ?>">
        <h4>краткое содержание</h4>
        <textarea name="short_content"><?= $message['short_content']; ?></textarea>
        <h4>полное содержание</h4>
        <textarea name="full_content"><?= $message['full_content']; ?></textarea>
        <input type="submit" value="Изменить">
    </form>

</body>

</html>