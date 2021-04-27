<div class="admin">
    <div class="container">
        <div class="admin__wrapper">
            <ul class="admin__tabs">
                <li class="admin__tab admin__tab_green admin__tab_active"><div>Добавить новость</div></li>
                <li class="admin__tab admin__tab_yellow"><div>Изменить новость</div></li>
                <li class="admin__tab admin__tab_red"><div>Удалить новость</div></li>
            </ul>
            <div class="admin__form admin__form_active">
                <form action="" method="POST" class="admin__create-form" id="create_form">
                    <!-- <input type="hidden" name="form_id" value="1"> -->
                    <div class="admin__input">
                        <input type="text" name="title">
                        <label for="title">Заголовок</label>
                    </div>    
                    <div class="admin__input">
                        <input type="text" name="preview">
                        <label for="preview">Превью</label>
                    </div>
                    <div class="admin__input">
                        <textarea type="text" name="text"></textarea>
                        <label for="text">Новость</label>
                    </div>
                    <div class="admin__input">
                        <input type="text" name="date" readonly value="<?php echo (new DateTime())->format('d F Y'); ?>">
                        <label for="preview">Дата</label>
                    </div>
                    <div class="admin__input">
                        <input type="text" name="image">
                        <label for="image">Название картинки</label>
                    </div>
                    
                    <input type="submit" class="btn admin__create-btn" id="btnA" value="Добавить">
                </form>
            </div>

            <div class="admin__form">
                <form action="" method="POST" class="admin__edit-form" id="edit_form">
                    <input type="hidden" name="form_id" value="1">
                    <div class="admin__input">
                        <input type="text" name="id">
                        <label for="id">id</label>
                    </div> 
                    
                    <input type="submit" class="btn admin__edit-btn" id="btnE" value="Изменить">
                </form>
            </div>

            <div class='admin__form-update'>
                <h2 class='title admin__title'>Изменение новости</h2>
                <form action='' method='POST' class='admin__update-form' id='update_form'>
                    <input type='hidden' name='form_id' value='2'>
                    <input type='hidden' name='id' id='id'>
                    <div class='admin__input'>
                        <input type='text' name='title' id='title'>
                        <label for='title'>Заголовок</label>
                    </div>    
                    <div class='admin__input'>
                        <input type='text' name='preview' id='preview'>
                        <label for='preview'>Превью</label>
                    </div>
                    <div class='admin__input'>
                        <textarea type='text' name='text' id='text'></textarea>
                        <label for='text'>Новость</label>
                    </div>
                    <div class='admin__input'>
                        <input type='text' name='date' readonly id='date'>
                        <label for='preview'>Дата</label>
                    </div>
                    <div class='admin__input'>
                        <input type='text' name='image' id='image'>
                        <label for='image'>Название картинки</label>
                    </div>
                 
                    <input type='submit' class='btn admin__update-btn' id="btnU" value='Обновить'>
                </form>
            </div>

            <div class="admin__form">
                <form action="" method="POST" class="admin__delete-form" id="delete_form">
                    <div class="admin__input">
                        <input type="text" name="id">
                        <label for="id">id</label>
                    </div> 

                    <input type="submit" class="btn admin__delete-btn" id="btnD" value="Удалить">
                </form>
            </div>
            <div class="admin__message" id="result_form"></div> 
        </div>
    </div>
</div>