<?php



function checkTitle($title) {
    if (getTitle() == $title) {
        if (empty($title)) {
            return false;
        } else {
            return true;
        }
    }
}

function checkInformation($information) {
    if (getInformation() == $information) {
        if (empty($information)) {
            return false;
        } else {
            return true;
        }
    }
}

function checkAgecontol($agecontrol) {
if (getAgecontol() == $agecontrol) {
        if (empty($agecontrol)) {
            return false;
        } else {
            return true;
        }
    }
}

function checkDurationStart($durationstart) {
    if (getDurationstart() == $durationstart) {
        if (empty($durationstart)) {
            return false;
        } else {
            return true;
        }
    }
}

function checkDurationEnd($durationend) {
    if (getDurationend() == $durationend) {
        if (empty($durationend)) {
            return false;
        } else {
            return true;
        }
    }
}

$username = "root"; 
$password = ""; 
$database = "BigEvent"; 
$mysqli = mysqli_connect("localhost", $username, $password, $database); 
$query = "SELECT * FROM events";


?>