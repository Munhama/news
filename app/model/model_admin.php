<?php

class Model_Admin extends Model {

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
                ]);
        }

        return $result;
    }

    public function delete_news() {

        require_once 'app/core/dbConnect.php';
        $link = dbConnect::connection();

        $query = mysqli_prepare($link, 'DELETE FROM `news` WHERE `id`=?');
        mysqli_stmt_bind_param($query, 'i', $id);
        $id = $_POST['id'];
        mysqli_stmt_execute($query);
        $ar = array(
            'msg' => 'Новость',
            'id' => $id,
            'msg2' => 'удалена',
        );
        echo json_encode($ar);
    }

    public function create_news() {

        require_once 'app/core/dbConnect.php';
        $link = dbConnect::connection();

        $query = mysqli_prepare($link, 'INSERT INTO `news` (`title`, `preview`, `text`, `date`, `image`) VALUE (?,?,?,?,?)');
        mysqli_stmt_bind_param($query, 'sssis', $title, $preview, $text, $date, $image);
        $title = $_POST['title'];
        $preview = $_POST['preview'];
        $text = $_POST['text'];
        $date = date("Ymd");
        $image = $_POST['image'];
        mysqli_stmt_execute($query);
        $ar = array(
            'msg' => 'Новость',
            'id' => $title,
            'msg2' => 'добавлена',
        );
        echo json_encode($ar);
    }

    public function edit_news() {

        require_once 'app/core/dbConnect.php';
        $link = dbConnect::connection();

        $formId = $_POST['form_id'];

        switch ($formId) {
            case 1:
                $query = mysqli_prepare($link, 'SELECT * FROM `news` WHERE `id`=?');
                mysqli_stmt_bind_param($query, 'i', $idNews);
                $idNews=$_POST['id'];
                mysqli_stmt_execute($query);
                mysqli_stmt_bind_result($query, $id, $title, $preview, $text, $date, $image);
                mysqli_stmt_fetch($query);
                $data['id'] = $id;
                $data['title'] = $title;
                $data['preview'] = $preview;
                $data['text'] = $text;
                $data['date'] = $date;
                $data['image'] = $image;

                echo json_encode($data);
                break;

            case 2:
                $query = mysqli_prepare($link, 'UPDATE `news` SET `title`=?, `preview`=?, `text`=?, `image`=? WHERE `id`=?');
                mysqli_stmt_bind_param($query, 'ssssi', $title, $preview, $text, $image, $id);
                $title = $_POST['title'];
                $preview = $_POST['preview'];
                $text = $_POST['text'];
                $image = $_POST['image'];
                $id = $_POST['id'];
                mysqli_stmt_execute($query);

                $ar = array(
                    'msg' => 'Новость',
                    'id' => $title,
                    'msg2' => 'изменена',
                );
                echo json_encode($ar);

                break;
            
            default:
                # code...
                break;
        }

    }
}