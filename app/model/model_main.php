<?php

class Model_Main extends Model {

    public function get_data() {
        $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $db_name = 'news';
        $link = mysqli_connect($host, $user, $password, $db_name);
        if(!link) {
            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
            exit;
        }

        $query = 'SELECT * FROM `news` ORDER BY `date` DESC';
        $sql = mysqli_query($link, $query);
        $result = [];

        while($row = mysqli_fetch_assoc($sql)) {
            array_push($result, [
                    'id' => $row['id'],
                    'title' => $row['title'],
                    'preview' => $row['preview'],
                    'text' => $row['text'],
                    'date' => $row['date'],
                    'image' => $row['image'],
                ]);
        }

        return $result;
    }
}