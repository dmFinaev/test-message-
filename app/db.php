<?php
error_reporting(0);
require "config.php";




//Дабавления сообщения в БД
if (!empty($_POST)) {
    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $author = isset($_POST['author']) ? $_POST['author'] : "";
    $short_content = isset($_POST['short_content']) ? $_POST['short_content'] : "";
    $full_content = isset($_POST['full_content']) ? $_POST['full_content'] : "";
    if ($title !== "" && $author !== "" && $short_content !== "" && $full_content !== "") {
        $content = mysqli_query($induction, "INSERT INTO `messages` (`id`, `title`, `author`, `short_content`, `full_content`) VALUES (NULL, '$title', '$author', '$short_content', '$full_content')");
        if ($content) {
            echo "
        Сообщения отправлено.";
        } else {
            echo "Информация не занесена проверьте правильность  внесенных данных. "  . mysqli_error($induction);
        }
    } else {
        echo "Пожалуйста, заполните все поля формы.";
    }
    header('Location: /');
}
