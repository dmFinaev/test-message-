<?php
error_reporting(0);
require "config.php";

$id = $_POST['id'];
$title = isset($_POST['title']) ? $_POST['title'] : "";
$author = isset($_POST['author']) ? $_POST['author'] : "";
$short_content = isset($_POST['short_content']) ? $_POST['short_content'] : "";
$full_content = isset($_POST['full_content']) ? $_POST['full_content'] : "";

$update = mysqli_query($induction, "UPDATE `messages` SET `title` = '$title', `author` = '$author', `short_content` = '$short_content', `full_content` = '$full_content' WHERE `messages`.`id` = '$id'");
if ($update) {
    echo "
        Сообщения изменено.";
} else {
    echo "Информация не занесена проверьте правильность  внесенных данных. "  . mysqli_error($induction);
}
header('Location: /');
