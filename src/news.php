<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="css/style.min.css">

</head>
<body>
    <aside class="sidepanel">
        <a href="index.php" class="sidepanel__link">
            <div class="sidepanel__arrow"></div>
        </a>
    </aside>

    <div class="menu">
        <nav>
            <div class="container">
                <h1 class="title menu__title">Beast news</h1>

                <ul class="menu__block">
                    <li class="menu__link"><a href="index.php">Главная</a></li>
                    <li class="menu__link"><a href="#">Самое интересное</a></li>
                    <li class="menu__link"><a href="#">Контакты</a></li>
                </ul>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </div>

    <div class="text">
        <div class="container">
            <div class="text__wrapper">
                <?php
                    $idNews = $_GET['id'];

                    $host = 'localhost';
                    $user = 'root';
                    $password = 'root';
                    $db_name = 'news';
                    $link = mysqli_connect($host, $user, $password, $db_name);
                    if(!link) {
                        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
                        exit;
                    }

                    $query = 'SELECT * FROM `news` WHERE `id`='.intval($idNews);
                    $sql = mysqli_query($link, $query); 
                    while($result = mysqli_fetch_array($sql)) {
                        echo "
                            <div class='title text__title'>{$result['title']}</div>
                            <div class='text__img'>
                                <img src='img/{$result['image']}' alt='photo'>
                            </div>
                            <p class='text__descr'>{$result['text']}</p>
                            <div class='text__date'>{$result['date']}</div>
                        ";
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="js/hamburger.js"></script>
</body>
</html>