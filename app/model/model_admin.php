<?php

class Model_Admin extends Model {

    public function get_data() {
        
        require_once 'app/core/dbConnect.php';
        $link = dbConnect::connection();
        
        $formId = $_POST['form_id'];

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
                $ar = array(
                    'msg' => 'Новость',
                    'id' => $title,
                    'msg2' => 'добавлена',
                );
                echo json_encode($ar);
                break;
            
            case 2:
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

                echo "
                    <div class='admin__form_upper'>
                    <h2 class='title admin__title'>Изминение новости</h2>
                    <form action='' method='POST' class='admin__update-form' id='update_form'>
                            <input type='hidden' name='form_id' value='4'>
                            <input type='hidden' name='id' value='{$data['id']}'>
                            <div class='admin__input'>
                                <input type='text' name='title' value='{$data['title']}'>
                                <label for='title'>Заголовок</label>
                            </div>    
                            <div class='admin__input'>
                                <input type='text' name='preview' value='{$data['preview']}'>
                                <label for='preview'>Превью</label>
                            </div>
                            <div class='admin__input'>
                                <textarea type='text' name='text'>{$data['text']}</textarea>
                                <label for='text'>Новость</label>
                            </div>
                            <div class='admin__input'>
                                <input type='text' name='date' readonly value='{$data['date']}'>
                                <label for='preview'>Дата</label>
                            </div>
                            <div class='admin__input'>
                                <input type='text' name='image' value='{$data['image']}'>
                                <label for='image'>Название картинки</label>
                            </div>
                            
                            <input type='submit' class='btn admin__update-btn' value='Обновить'>
                        </form>
                    </div>
                ";
                break;

            case 3:
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
                break;

            case 4:
                $query = mysqli_prepare($link, 'UPDATE `news` SET `title`=?, `preview`=?, `text`=?, `image`=? WHERE `id`=?');
                mysqli_stmt_bind_param($query, 'ssssi', $title, $preview, $text, $image, $id);
                $title = $_POST['title'];
                $preview = $_POST['preview'];
                $text = $_POST['text'];
                $image = $_POST['image'];
                $id = $_POST['id'];
                mysqli_stmt_execute($query);
                break;

            default:
                # code...
                break;
        }
        
    }
}