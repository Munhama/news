<div class="admin">
    <div class="container">
        <div class="admin__wrapper">
            <button class="btn admin__btn-show" id="create_btn">Добавить новость</button>
            <form action="" method="POST" class="admin__create-form" id="create_form">
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
                    <input type="text" name="date" readonly value="дата">
                    <label for="preview">Дата</label>
                </div>
                <div class="admin__input">
                    <input type="text" name="image">
                    <label for="image">Название картинки</label>
                </div>
                
                <input type="submit" class="btn admin__create-btn" value="Создать!">
            </form>
            <!-- <button class="admin__edit-btn" id="edit_btn">Изменить новость</button>
            <button class="admin__delete-btn" id="delete_btn">Удалить новость</button> -->
            <!-- <form action="#" class="admin__edit-form" id="edit_form">
                <input type="text" class="admin__edit-id">
                <input type="submit" class="admin__edit-btn" value="Изменить!">
            </form>
            <form action="#" class="admin__delete-form" id="delete_form">
                <input type="text" class="admin__delete-id">
                <input type="submit" class="admin__delete-btn" value="Удалить!">
            </form> -->
        </div>
    </div>
</div>