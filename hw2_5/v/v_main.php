<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="v/css/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="header">
        <div class="nav">
            <a href="#" class="logo">
                <img src="v/img/logo2.png" alt="logo">
                Бетон-протект
            </a>
            <div class="find">
                <form class="find-form" action="#" name="find" method="post">
                    <input id="find-text" type="text" placeholder="Find...">
                    <label for="find-text">find goods</label>
                </form>
            </div>
            <div class="cart nav-div">
                <a href="#" class="cart-link">cart</a>
            </div>
            <div class="authorization nav-div">
                <a href="index.php?act=auth&c=User" class="login">log in</a>
            </div>
            <div class="authorization nav-div">

                <a href="index.php?act=reg&c=User" class="login">Sign IN</a>
            </div>
        </div>
    </div>
    <div class="main-content">
        <div class="side-menu">
            <div class="menu-item"><a href="#" class="menu-link">главная</a></div>
            <div class="menu-item"><a href="#" class="menu-link">каталог</a></div>
            <div class="menu-item"><a href="#" class="menu-link">отзывы</a></div>
            <div class="menu-item"><a href="#" class="menu-link">контакты</a></div>

        </div>
        <div class="content" id="content">
            <?=$content?>
        </div>
    </div>
    <div class="footer">
        2020 Copyright
    </div>
</div>
</body>
</html>