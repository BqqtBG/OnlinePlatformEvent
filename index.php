<?php
include './assets/src/application.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Event</title>
        <link rel="stylesheet" href="./assets/css/main.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="body_background_index">
            <div class="logo_background">

            </div>
            <div class="navi_bar" id="nav_bar">
                <?php naviBar() ?>
            </div>
            <div class="body_center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 ">
                            <h2 class="bar_info">Малко информация за нас!</h2> 
                            <p class="content_style">
                                Здравейте бих искал да ви се представя аз съм Конса ,а моят партньор
                                е Парфето ние двамата искахме да направим панаир в нашето село ,нo тей
                                като COVID-19 настигна нашето скромно селце това нямаше как да се осъществи,
                                за това след дълго обсъждане ние решихме да създадем онлайн събитие в ,което
                                всеки да може да научи нещо ново или просто да се позабавлява
                                .За да се запишете или да създадете ваше събите моля Регистрирайте се!
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">   
                            <div>
                                <h2 class="bar_info">Новини!</h2> 
                                <p class="content_style">
                                    --------------------------------------------------------------------------------------------------------<br>
                                    4) Проблемът с евентите беше фикснът на 26.12.2020г.<br>
                                    3) Проблемът с крашването на сайта беше оправен на 02.12.2020г.<br>
                                    2) Проблемът с създаването на събития беше оправен на 01.12.2020г.<br>
                                    1) Тук ще се публикуват новини свързани с сайтът и неговото развитие!<br>
                                    --------------------------------------------------------------------------------------------------------
                                </p>
                            </div>
                        </div>
                        <?php footer() ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
