<?php
error_reporting(0);
require "config.php";
$id = $_GET['id'];
mysqli_query($induction, "DELETE FROM `messages` WHERE `messages`.`id` = $id");
header('Location: /');
