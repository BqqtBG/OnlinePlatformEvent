<?php

include 'assets/src/validation/validation_register.php';
include 'assets/src/database.php';

insertFormData(getFirstname(), getSecondname(), getUsername(), getPassword(), getAge(), getGender(), "BigEvent");


function getFirstname() {
    if (isset($_POST ["firstname"])) {
        return $_POST ["firstname"];
    }
}

function getSecondname() {
    if (isset($_POST ["secondname"])) {
        return $_POST ["secondname"];
    }
}

function getUsername() {
    if (isset($_POST ["username"])) {
        return $_POST ["username"];
    }
}

function getPassword() {
    if (isset($_POST ["password"])) {
        return $_POST ["password"];
    }
}

function getAge() {
    if (isset($_POST ["age"])) {
        return $_POST ["age"];
    }
}

function getGender() {
    if (isset($_POST ["gender"])) {
        return $_POST ["gender"];
    }
}

function getSubmit() {
   if (isset($_POST ["submit"])) {
        return $_POST ["submit"];
    } 
}