<?php
include './assets/src/application.php';

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/main.css"/>
        <link rel="stylesheet" href="assets/css/animation.css">
        <style>
            .error {color: red; display: block; text-align: center;}
            .test {color: red; display: block; text-align: center;}
      </style>
    </head>
    <body>
        <div class="register_form">
            <form action="" method="POST">
                <label for="fname">Firstname </label>
                <input type="text" name="firstname" placeholder="Firstname" >
                <span class="error">* <?php getFirstname()=== false ?></span>
                <label for="sname">Secondname</label>
                <input type="text" name="secondname" placeholder="Secondname">
                <span class="error">* <?php getSecondname()=== false ?></span>
                <label for="email">Username</label>
                <input type="text" name="username" placeholder="Username">
                <span class="error">* <?php getUsername()=== false ?></span>
                <span class="error">* <?php ExistsUsername(getUsername(), "BigEvent")=== false ?></span>
                <label for="pass">Password</label>
                <input type="password" name="password" placeholder="Password">
                <span class="error">* <?php getPassword()=== false ?></span>
                <label for="years">Your age</label>
                <input type="number" name="age" placeholder="Age">
                <span class="error">* <?php getAge()=== false ?></span>
                <label for="gender">Gender:</label>
                <input type="radio" id="male" name="gender" value="male"> 
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female">
                <label for="gender">Female</label><br>
                <span class="error">* <?php getGender()=== false ?></span>
                <input  type="submit" name="submit" value="Submit">
                <a class="cancel_btn" href="index.php">Cancel</a>
            </form>
        </div>
    <div id="particles-js"></div>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js">
    </script>
    <script src="assets/js/animation.js"></script>
<script src="assets/js/validation.js"></script>
      <script src="assets/js/animation.js"></script>
    </body>
</html>