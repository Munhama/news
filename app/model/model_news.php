<?php

class Model_News extends Model {

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

        $idNews = $_POST['news_id'];

        $query = 'SELECT * FROM `news` WHERE `id`='.intval($idNews);
        $sql = mysqli_query($link, $query);

        $row = mysqli_fetch_assoc($sql);
        
        return $row;
    }
}