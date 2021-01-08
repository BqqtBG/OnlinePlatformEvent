<?php

include 'assets/src/validation/validation_events.php';
include 'assets/src/database.php';

insertEventData(getTitle(), getInformation(), getAgecontol(), getDurationstart(), getDurationend(), "BigEvent");


function getTitle() {
    if (isset($_POST ["title"])) {
        return $_POST ["title"];
    }
}

function getInformation() {
    if (isset($_POST ["information"])) {
        return $_POST ["information"];
    }
}

function getAgecontol() {
    if (isset($_POST ["agecontrol"])) {
        return $_POST ["agecontrol"];
    }
}

function getDurationstart() {
    if (isset($_POST ["durationstart"])) {
        return $_POST ["durationstart"];
    }
}

function getDurationend() {
    if (isset($_POST ["durationend"])) {
        return $_POST ["durationend"];
    }
}

//function getSubmit() {
//    if (isset($_POST ["submit"])) {
//        return $_POST ["submit"];
//    } else {
//        return false;
//    }
//}