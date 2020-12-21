<?php
include './assets/src/application.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Event</title>
        <link rel="stylesheet" href="./assets/css/main.css"/>
    </head>
    <body class="body_background">
        <div >
            <div class="logo_background"></div>
            <div class="navi_bar">
                <?php naviBar() ?>
            </div>
        </div>
        <div class="body_center">
            <div>
                <h2 class="bar_info">Малко информация за нас!</h2> 
                <p class="content_style">Здравейте бих искал да ви се представя аз съм Конса ,а моят партньор
                 е Парфето ние двамата искахме да направим панаир в нашето село ,нo тей
                 като COVID-19 настигна нашето скромно селце това нямаше как да се осъществи,
                 за това след дълго обсъждане ние решихме да създадем онлайн събитие в ,което
                 да може всеки да може да покаже неговият талант или просто да се позабавлява
                 на онлайн дискотечка.За да започнете да се забавлявате моля Регистрирайте се!
                </p>
            </div>
            <?php footer() ?>
        </div>
    </body>
</html>
