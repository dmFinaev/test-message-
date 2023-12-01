<?php

include_once './app/path.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сообщения</title>
</head>

<body>
    <?php
    $message_id = $_GET['id'];
    $message = mysqli_query($induction, "SELECT * FROM `messages` WHERE `id`= '$message_id'");
    $message = mysqli_fetch_assoc($message);

    ?>
    <h2>Сообщения</h2>
    <div>
        <p><?= $message['full_content']; ?></p>
    </div>

    <?php


    ?>
    <?php
    $topics = mysqli_query($induction, "SELECT * FROM `comments`");
    while ($comments = mysqli_fetch_assoc($topics)) { ?>


        <p><?= $comments['name']; ?></p>
        <p><?= $comments['comment']; ?></p>
        </div>
    <?php
    }
    ?>
    <div>
        <h3>Написать коментарии</h3>
        <form action="" method="post">

            <div>
                <label>Ваше имя </label>
                <input name="name" type="text" placeholder="Иван">
            </div>
            <div>
                <label>Ваше комментарий</label>
                <textarea name="comment"></textarea>
            </div>
            <div>
                <button type="submit">Отправить</button>
            </div>
        </form>
    </div>
</body>

</html>