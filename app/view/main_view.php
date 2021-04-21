<div class="news">
    <div class="container">
        <div class="news__items">
            <?php 
                foreach($data as $row) {
                    echo "
                        <div class='news__item' id='{$row['id']}'>
                            <div class='news__img'>
                                <img src='img/{$row['date']}/{$row['image']}' alt='photo'>
                            </div>
                            <div class='title news__title'>{$row['title']}</div>
                            <div class='news__descr'>{$row['preview']}</div>

                            <form action='/news' method='POST' class='form' id='news-form_hidden'>
                                <input type='hidden' name='news_id' value='{$row['id']}'>
                            
                                <input type='submit' class='btn news__btn' value='Читать дальше'>
                            </form>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
</div>