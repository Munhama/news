<div class="news">
    <div class="container">
        <div class="news__items">
            <?php 
                foreach($data as $row) {
                    echo "
                        <div class='news__item'>
                            <div class='news__img'>
                                <img src='img/{$row['date']}/{$row['image']}' alt='photo'>
                            </div>
                            <div class='title news__title'>{$row['title']}</div>
                            <div class='news__descr'>{$row['preview']}</div>
                            <a href='news.php?id={$row['id']}' class='btn news__btn' id='{$row['id']}'>Читать дальше</a>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
</div>