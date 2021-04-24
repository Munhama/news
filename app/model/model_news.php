<?php

class Model_News extends Model {

    public function get_data() {
        
        require_once 'app/core/dbConnect.php';
        $link = dbConnect::connection();

        $query = mysqli_prepare($link, 'SELECT * FROM `news` WHERE `id`=?');
        mysqli_stmt_bind_param($query, 'i', $idNews);
        $idNews = $_POST['news_id'];
        mysqli_stmt_execute($query);
        mysqli_stmt_bind_result($query, $id, $title, $preview, $text, $date, $image);

        mysqli_stmt_fetch($query); 
        $data['id'] = $id;
        $data['title'] = $title;
        $data['preview'] = $preview;
        $data['text'] = $text;
        $data['date'] = $date;
        $data['image'] = $image;
        
        return $data;
    }
}