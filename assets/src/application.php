<?php

include 'assets/src/database.php';
insertFormData(getFirstname(), getSecondname(), getUsername(), getPassword(), getAge(), getGender(), "BigEvent");

function ExistsUsername($username, $db_name) {
    $sql = "SELECT username FROM userdata WHERE username = '$username'";
    $result = mysqli_query(MySqlConnectName("localhost", "root", "", "$db_name"), $sql);
    $row = mysqli_fetch_row($result);
    if (mysqli_num_rows($result) > 0){
        echo "Sashtestvuva";
        return false;
    } else {
        return true;
    }
}


function getFirstname(){
    if(empty($_POST ["firstname"])){
        echo "Empty Firstname";
        return false;
    } else {
    if (isset($_POST ["firstname"])){
        return $_POST ["firstname"];   
    }
}
}
function getSecondname() {
    if(empty($_POST ["secondname"])){
        echo "Empty Secondname";
        return false;
    } else {
    if (isset($_POST ["secondname"])){
        return $_POST ["secondname"];   
    }
}
}

function getUsername() {
    if(empty($_POST ["username"])){
        echo "Empty Username";
        return false;
    } else {
    if (isset($_POST ["username"])){
        return $_POST ["username"];   
    }
}
}

function getPassword() {
    if(empty($_POST ["password"])){
        echo "Empty Password";
        return false;
    } else {
    if (isset($_POST ["password"])){
        return $_POST ["password"];   
    }
}
}

function getAge() {
    if(empty($_POST ["age"])){
        echo "Empty Age";
        return false;
    } else {
    if (isset($_POST ["age"])){
        return $_POST ["age"];   
    }
}
}

function getGender() {
    if(empty($_POST ["gender"])){
        echo "Empty Gender";
        return false;
    } else {
    if (isset($_POST ["gender"])){
        return $_POST ["gender"];   
    }
}
}

session_start();


//CreateDB("BigEvent");
//CreateTable("BigEvent");
//CreateTableTwo("BigEvent");




function naviBar(){
    if(isUserLogedIn()) :
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
function isUserLogedIn() {
    
    if(isset($_SESSION['isUserLogedIn'])) {
        return $_SESSION['isUserLogedIn'];
    }
    
    return false;
}

if(isset($_POST['email'])) {
    $_SESSION['email']          = $_POST['email'];
    $_SESSION['isUserLogedIn']   = true;
}

function get_email() {
    
    if(isset($_SESSION['email'])) {
        return $_SESSION['email'];
    }
    
    return "";
}

function redirect($location) {
    header("Location: $location");
}

function footer (){
    //Made by Bozhidar Qnkov!!!
    echo "<footer class='footer-copyright'>&copy; Copyright 2020 Made by Bozhidar Qnkov</footer>";
}
