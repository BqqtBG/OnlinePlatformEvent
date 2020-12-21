<?php
function MySqlConnect ($host, $user, $password) {
    $link = mysqli_connect("$host", "$user", "$password");
    if(isset($link)=== false){
        die (" ERROR cloud not connect " . mysqli_connect_error());
        }    
        else {
            return $link;
    }
}

function MySqlConnectName ($host, $user, $password, $db_name){
    $link = mysqli_connect("$host", "$user", "$password", $db_name);
    if (isset($link) === false){
        die (" ERROR cloud not connect " . mysqli_connect_error());
        }    
    return $link;
}

function SelectDataBase ($dbName) {
    $db = mysqli_select_db(MySqlConnect("localhost", "root", ""),$dbName);
        if (!$db){
            echo ('Database not exist:' . $dbName . mysqli_connect_error());
            return false;
        }
        return $dbName;
}

function sqlCommand($sql){
    return $sql;
}

function CreateDB ($dbName) {
    if (SelectDataBase($dbName) == false) {
        if (mysqli_query(MySqlConnect("localhost", "root", ""), sqlCommand("CREATE DATABASE " .$dbName))) {
            return "Database has been created ";
        }
    }
 else {
        return "Database alredy exists";    
    }
}

function checkDBExists ($dbName) {
    if (SelectDataBase($dbName) == false) {
        CreateDB($dbName);
    }
 else {
        return $dbName;    
    }
}

function CreateTable ($dbName){
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
    }
 else {
        return false;    
    }
}

function CreateTableTwo ($dbName){
    $sql = "CREATE TABLE events (
    id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
    title VARCHAR(80) NOT NULL,
    information VARCHAR(250) NOT NULL,
    age VARCHAR(30) NOT NULL,
    duration VARCHAR(30) NOT NULL,
    firstname VARCHAR(30)NOT NULL,
    secondname VARCHAR(30) NOT NULL
    )";
    $db_name = SelectDataBase($dbName);
    if (mysqli_query(MySqlConnectName("localhost", "root", "", "$db_name"), $sql)) {
        return true;
    }
 else {
        return false;    
    }
}
function insertFormData ($firstname, $lastname, $username, $password, $age, $gender, $db_name) {
    $sql = "INSERT INTO userdata (firstname, lastname, username, password, age, gender)
    VALUES ('$firstname', '$lastname', '$username', '$password', '$age' ,'$gender')";
    if(isset($_POST['submit'])){
    
    if (ExistsUsername($username, $db_name)=== true){ 
    }
        
    if(getFirstname($firstname)=== true){ 
    } else {
     if(getFirstname($firstname)=== false){ 
         return false;
    }
    }
    
    if(getSecondname($lastname)=== true){ 
    } else {
     if(getSecondname($lastname)=== false){ 
         return false;
    }
    }
    
    if(getUsername($username)=== true){ 
    } else {
     if(getUsername($username)=== false){ 
         return false;
    }
    }
    
    if(getPassword($password)=== true){ 
    } else {
     if(getPassword($password)=== false){ 
         return false;
    }
    }
    
    if(getAge($age)=== true){ 
    } else {
     if(getAge($age)=== false){ 
         return false;
    }
    }
    
    if(getGender($gender)=== true){ 
    } else {
     if(getGender($gender)=== false){ 
         return false;
    }
    }
    }
 else {
        echo "ERROR: Could not prepare query: $sql. " . mysqli_error(MySqlConnectName("localhost","root","","$db_name"));    
    }
   }

