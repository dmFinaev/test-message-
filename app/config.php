<?php
$par1_ip = 'localhost';
$par2_name = 'root';
$par3_p = '';
$par4_db = 'test';

$induction = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
if (!$induction) {
    die('Ошибка подключения');
}
