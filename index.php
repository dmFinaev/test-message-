<?php

include_once './app/db.php';
print_r($_GET)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
</head>


<body>


    <?php
    $result = mysqli_query($induction, "SELECT * FROM `messages`");
    while ($message = mysqli_fetch_assoc($result)) {
    ?>
        <h2>Сообщения</h2>
        <div><a href="/message.php?id=<?= $message['id']; ?>">
                <h3><?= $message['title']; ?></h3>
            </a></div>
        <div>
            <h4>Автор</h4>
            <h5><?= $message['author']; ?></h5>
            <p><?= mb_substr($message['short_content'], 0, 50, 'UTF-8') . '...' ?></p>
        </div>
        <div>
            <p><a href="/update.php?id=<?= $message['id']; ?>">Изменить</a></p>
            <p><a style="color:red;" href="/app/delete.php?id=<?= $message['id']; ?>">Удалить</a></p>
        </div>
    <?php
    }

    ?>
    <h2>Добавить сообщение</h2>
    <form action="/app/db.php" method="POST">
        <h4>Заголовок</h4>
        <input type="text" name="title">
        <h4>Автор</h4>
        <input type="text" name="author">
        <h4>краткое содержание</h4>
        <textarea name="short_content"></textarea>
        <h4>полное содержание</h4>
        <textarea name="full_content"></textarea>
        <input type="submit" value="Отправить">
    </form>
</body>

</html>