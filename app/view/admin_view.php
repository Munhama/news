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
                    <input type="hidden" name="form_id" value="1">
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
                    
                    <input type="submit" class="btn admin__create-btn" value="Создать">
                </form>
            </div>

            <div class="admin__form">
                <form action="" method="POST" class="admin__edit-form" id="edit_form">
                    <input type="hidden" name="form_id" value="2">
                    <div class="admin__input">
                        <input type="text" name="id">
                        <label for="id">id</label>
                    </div> 

                    <input type="submit" class="btn admin__edit-btn" value="Изменить">
                </form>
            </div>

            <div class="admin__form">
                <form action="" method="POST" class="admin__delete-form" id="delete_form">
                    <input type="hidden" name="form_id" value="3">
                    <div class="admin__input">
                        <input type="text" name="id">
                        <label for="id">id</label>
                    </div> 

                    <input type="submit" class="btn admin__delete-btn" value="Удалить">
                </form>
            </div>
        </div>
    </div>
</div>