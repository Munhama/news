<aside class="sidepanel">
    <a href="/#<?= $data['id']; ?>" class="sidepanel__link">
        <div class="sidepanel__arrow"></div>
    </a>
</aside>

<div class="text">
    <div class="container">
        <div class="text__wrapper">
            <div class='title text__title'><?= $data['title']; ?></div>
            <div class='text__img'>
                <img src='img/<?= $data['date']; ?>/<?= $data['image']; ?>' alt='photo'>
            </div>
            <p class='text__descr'><?= $data['text']; ?></p>
            <div class='text__date'><?= $data['date']; ?></div>      
        </div>
    </div>
</div>