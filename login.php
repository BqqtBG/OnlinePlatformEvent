<?php

include './assets/src/application.php';

?>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/main.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/animation.css">
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
        <script src="http://code.jquery.com/jquery-1.9.1.min.js" type="text/javascript"></script>
    </head>
    <body id="background">
        <div class="register_form login_form">
            <form action="index.php" method="POST">
                <label for="email">Email</label>
                <input type="text" name="email" placeholder="Email">
                <label for="pass">Password</label>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" name="submit" value="Submit">
                <a class="cancel_btn" href="index.php">Cancel</a>
            </form>
        </div>
    <div id="particles-js"></div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="assets/js/animation.js"></script>
    </body>
</html>