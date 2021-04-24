<?php

class dbConnect {
    static function connection() {
        $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $db_name = 'news';
        $link = mysqli_connect($host, $user, $password, $db_name);
        if(!link) {
            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
            exit;
        }
        return $link;
    }
}
