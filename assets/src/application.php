<?php

session_start();

CreateDB("BigEvent");
CreateTable("BigEvent");
CreateTableTwo("BigEvent");

function LoginStatus() {
    if (isset($_SESSION['IsUserLogedIn'])) {
        return $_SESSION['IsUserLogedIn'];
    }
}

function LoginStatusSet($status) {
    return $_SESSION['IsUserLogedIn'] = $status;
}

function naviBar() {
    if (LoginStatus() == true) :
        echo "<ul>";
        echo "<li><a href='index.php'>Начало</a></li>";
        echo "<li><a href='events.php'>Събития</a></li>";
        echo "<li><a href=''>Контакти</a></li>";
        echo "<li style='float:right;'><a href='logout.php'>Изход</a></li>";
        echo "</ul>";
    else:
        echo "<ul>";
        echo "<li><a href='index.php'>Начало</a></li>";
        echo "<li><a href='events.php'>Събития</a></li>";
        echo "<li><a href=''>Контакти</a></li>";
        echo "<li style='float:right;'><a href='login.php'>Влизане</a></li>";
        echo "<li style='float:right;'><a href='register.php'>Регистрация</a></li>";
        echo "</ul>";
    endif;
}

function AddEventBtn() {
    if (LoginStatus() == true) :
        echo "<a class='btn_event' href='eventadd.php'>+ Добави свое събитие +</a>";
    else:
        echo "";
    endif;
}

function JoinEventBtn() {
    if (LoginStatus() == true) :
        echo "<a class='btn_event_join' href''>Запиши се</a>";
    else:
        echo "";
    endif;
}

function redirect($location) {
    header("Location: $location");
}

function footer() {
    //Made by Bozhidar Qnkov!!!
    echo "<footer class='footer-copyright'>&copy; 2020 Made by Божидар Янков (BqqtBG)</footer>";
}
