<?php

class Model_Admin extends Model {

    public function get_data() {

        $formId = $_POST['form_id'];

        $host = 'localhost';
        $user = 'root';
        $password = 'root';
        $db_name = 'news';
        $link = mysqli_connect($host, $user, $password, $db_name);
        if(!link) {
            echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
            exit;
        }
        
        echo $formId;

        switch ($formId) {
            case 1:
                $query = mysqli_prepare($link, 'INSERT INTO `news` (`title`, `preview`, `text`, `date`, `image`) VALUE (?,?,?,?,?)');
                mysqli_stmt_bind_param($query, 'sssis', $title, $preview, $text, $date, $image);
                $title = $_POST['title'];
                $preview = $_POST['preview'];
                $text = $_POST['text'];
                $date = date("Ymd");
                $image = $_POST['image'];
                mysqli_stmt_execute($query);
                break;
            
            case 2:
                # code EDIT...
                break;

            case 3:
                $query = mysqli_prepare($link, 'DELETE FROM `news` WHERE `id`=?');
                mysqli_stmt_bind_param($query, 'i', $id);
                $id = $_POST['id'];
                mysqli_stmt_execute($query);
                break;

            default:
                # code...
                break;
        }
        
    }
}