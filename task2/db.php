<?php
$db_host = 'std-2101.ist.mospolytech.ru';
//sftp://std-2101.ist.mospolytech.ru
$db_user = 'std_2101_shop'; //имя пользователя совпадает с именем БД
$db_password = 'password'; //пароль, указаный при создании БД
$database = 'std_2101_shop'; //имя БД, которое было указано при создании
$mysql = mysqli_connect($db_host, $db_user, $db_password, $database,3306);
if (!$mysql) {
    die("Connection failed:
    какая-то ошибка с подключением к бд, извините:(
    Данные, использованные для подключения:
    $ db_host = 'std-2101.ist.mospolytech.ru';
    $ db_user = 'std_2101_shop'; //имя пользователя совпадает с именем БД
    $ db_password = 'password'; //пароль, указаный при создании БД
    $ database = 'std_2101_shop'; //имя БД, которое было указано при создании
     " . mysqli_connect_error());
}
//$mysql = mysqli_connect('localhost', 'root', 'root', 'shop');
mysqli_set_charset($mysql, "utf8");
?>
