<div class="news">
    <div class="container">
        <div class="news__items">
            <?php foreach($data as $row):?>
                <div class='news__item' id='<?php echo $row['id']; ?>'>
                    <div class='news__img'>
                        <img src='img/<?php echo $row['date']; ?>/<?php echo $row['image']; ?>' alt='photo'>
                    </div>
                    <div class='title news__title'><?php echo $row['title']; ?></div>
                    <div class='news__descr'><?php echo $row['preview']; ?></div>

                    <form action='/news' method='POST' class='form' id='news-form_hidden'>
                        <input type='hidden' name='news_id' value='<?php echo $row['id']; ?>'>
                    
                        <input type='submit' class='btn news__btn' value='Читать дальше'>
                    </form>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>