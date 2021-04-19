<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beast News</title>
	<link rel="stylesheet" type="text/css" href="css/style.min.css" />

</head>
<body>
    <div class="menu">
        <nav>
            <div class="container">
                <h1 class="title menu__title">Beast news</h1>

                <ul class="menu__block">
                    <li class="menu__link"><a href="/">Главная</a></li>
                    <li class="menu__link"><a href="#">Админка</a></li>
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

    <?php include 'app/view/'.$content_view; ?>

    <script src="js/hamburger.js"></script>
</body>
</html>