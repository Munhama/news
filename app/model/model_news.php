<?php

class Model_News extends Model {

    public function get_data() {
        
        require_once 'app/core/dbConnect.php';
        $link = dbConnect::connection();

        $idNews = $_POST['news_id'];

        $query = 'SELECT * FROM `news` WHERE `id`='.intval($idNews);
        $sql = mysqli_query($link, $query);

        $row = mysqli_fetch_assoc($sql);
        
        return $row;
    }
}