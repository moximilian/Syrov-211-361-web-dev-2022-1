<?php 


    define('DB_HOST', 'localhost'); //Адрес
    define('DB_USER', 'root'); //Имя пользователя
    define('DB_PASSWORD', 'root'); //Пароль
    define('DB_NAME', 'lab5'); //Имя БД

    $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if($musql->connect_errno) exit('Ошибка подключения к БД');
    $mysql -> set_charset('utf8');
    /*$mysql -> close();*/
?>
