<?php

function MySqlConnect($host, $user, $password) {
    $link = mysqli_connect("$host", "$user", "$password");
    if (isset($link) === false) {
        die(" ERROR cloud not connect " . mysqli_connect_error());
    } else {
        return $link;
    }
}

function MySqlConnectName($host, $user, $password, $db_name) {
    $link = mysqli_connect("$host", "$user", "$password", $db_name);
    if (isset($link) === false) {
        die(" ERROR cloud not connect " . mysqli_connect_error());
    }
    return $link;
}

function SelectDataBase($dbName) {
    $db = mysqli_select_db(MySqlConnect("localhost", "root", ""), $dbName);
    if (!$db) {
        echo ('Database not exist:' . $dbName . mysqli_connect_error());
        return false;
    }
    return $dbName;
}

function sqlCommand($sql) {
    return $sql;
}

function CreateDB($dbName) {
    if (SelectDataBase($dbName) == false) {
        if (mysqli_query(MySqlConnect("localhost", "root", ""), sqlCommand("CREATE DATABASE " . $dbName))) {
            return "Database has been created ";
        }
    } else {
        return "Database alredy exists";
    }
}

function checkDBExists($dbName) {
    if (SelectDataBase($dbName) == false) {
        CreateDB($dbName);
    } else {
        return $dbName;
    }
}

function CreateTable($dbName) {
    $sql = "CREATE TABLE userdata (
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL,
    age VARCHAR(10 )NOT NULL,
    gender VARCHAR(10) NOT NULL
    )";
    $db_name = SelectDataBase($dbName);
    if (mysqli_query(MySqlConnectName("localhost", "root", "", "$db_name"), $sql)) {
        return true;
    } else {
        return false;
    }
}

function CreateTableTwo($dbName) {
    $sql = "CREATE TABLE events (
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    title VARCHAR(80) NOT NULL,
    information VARCHAR(400) NOT NULL,
    agecontrol VARCHAR(30) NOT NULL,
    durationstart VARCHAR(30) NOT NULL,
    durationend VARCHAR(30) NOT NULL
    )";
    $db_name = SelectDataBase($dbName);
    if (mysqli_query(MySqlConnectName("localhost", "root", "", "$db_name"), $sql)) {
        return true;
    } else {
        return false;
    }
}

function insertFormData($firstname, $lastname, $username, $password, $age, $gender, $db_name) {
    $sql = "INSERT INTO userdata (firstname, lastname, username, password, age, gender)
    VALUES ('$firstname', '$lastname', '$username', '$password', '$age' ,'$gender')";

    if (checkSname($lastname) == true && checkFname($firstname) == true && checkUsername($username) == true && ExistsUsername($username, "BigEvent") == true && checkPassword($password) == true && checkAge($age) == true && checkGender($gender) == true) {

        if (mysqli_query(MySqlConnectName("localhost", "root", "", "$db_name"), $sql)) {
            return "Successfull";
        } else {
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error(MySqlConnectName("localhost", "root", "", "$db_name"));
        }
    }
}

function LoginCheck($username, $password) {
    if (getSubmit()) {
        $sql = "SELECT * FROM userdata WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query(MySqlConnectName("localhost", "root", "", "BigEvent"), $sql);
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            $_SESSION['session_username'] = $row['username'];
            $_SESSION['session_password'] = $row['password'];
            $_SESSION['session_firstname'] = $row['firstname'];
            $_SESSION['session_lastname'] = $row['lastname'];
            $_SESSION['session_age'] = $row['age'];
            $_SESSION['session_gender'] = $row['gender'];
            LoginStatusSet('true');
            redirect('index.php');
            return true;
        } else {
            return false;
        }
    }
}



function insertEventData($title, $information, $agecontrol, $durationstart, $durationend, $db_name) {
    $sql = "INSERT INTO events (title, information, agecontrol, durationstart, durationend)
    VALUES ('$title', '$information', '$agecontrol', '$durationstart', '$durationend')";

    if (checkTitle($title) == true && checkInformation($information) == true && checkAgecontol($agecontrol) == true && checkDurationStart($durationstart) == true && checkDurationEnd($durationend) == true) {

        if (mysqli_query(MySqlConnectName("localhost", "root", "", "$db_name"), $sql)) {
            return "Successfull";
        } else {
            echo "ERROR: Could not prepare query: $sql. " . mysqli_error(MySqlConnectName("localhost", "root", "", "$db_name"));
        }
    }
}
