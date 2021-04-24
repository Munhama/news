<?php

class Model_Main extends Model {

    public function get_data() {
        
        require_once 'app/core/dbConnect.php';
        $link = dbConnect::connection();

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