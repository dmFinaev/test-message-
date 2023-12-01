


<?php
include_once 'config.php';
// Добавляем комментарий в БД
if (!empty($_POST)) {
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $comment = isset($_POST['comment']) ? $_POST['comment'] : "";

    // Проверка наличия данных
    if ($name !== "" && $comment !== "") {
        // Подготовка и выполнение запроса
        $result = mysqli_query($induction, "INSERT INTO `comments` (`id`, `name`, `comment`) VALUES (NULL, '$name', '$comment')");

        // Проверка успешности выполнения запроса
        if ($result) {
            echo "Комментарий успешно добавлен.";
        } else {
            echo "Ошибка при добавлении комментария: " . mysqli_error($induction);
        }
    } else {
        echo "Пожалуйста, заполните все поля формы.";
    }
}
//Выборка данных с одной таблицы
/*$message = mysqli_query($induction, "SELECT * FROM `messages` WHERE `id`= '$message_id'");
$message = mysqli_fetch_assoc($message);*/
?>



