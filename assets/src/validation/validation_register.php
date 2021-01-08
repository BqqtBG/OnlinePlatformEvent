<?php
function checkUsername($username) {
    if (getUsername() == $username) {
        if (empty($username)) {
            return "Empty Username";
            return false;
        } else {
            return true;
        }
    }
}

function checkPassword($password) {
    if (getPassword() == $password) {
        if (empty($password)) {
            return "Empty Password";
            return false;
        } else {
            return true;
        }
    }
}

function checkAge($age) {
    if (getAge() == $age) {
        if (empty($age)) {
            return "Empty Age";
            return false;
        } else {
            return true;
        }
    }
}

function checkGender($gender) {
    if (getGender() == $gender) {
        if (empty($gender)) {
            return "Empty Gender";
            return false;
        } else {
            return true;
        }
    }
}

function checkFname($firstname) {
    if (getFirstname() == $firstname) {
        if (empty($firstname)) {
            return "Empty Firstname";
            return false;
        } else {
            return true;
        }
    }
}

function checkSname($secondname) {
    if (getSecondname() == $secondname) {
        if (empty($secondname)) {
            return "Empty Secondname";
            return false;
        } else {
            return true;
        }
    }
}

function ExistsUsername($username, $db_name) {
    $sql = "SELECT username FROM userdata WHERE username = '$username'";
    $result = mysqli_query(MySqlConnectName("localhost", "root", "", "$db_name"), $sql);
    $row = mysqli_fetch_row($result);
    if (mysqli_num_rows($result) > 0) {
        echo "Sashtestvuva";
        return false;
    } else {
        return true;
    }
}



