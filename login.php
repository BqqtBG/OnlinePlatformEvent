<?php
include './assets/src/application.php';
include './assets/src/validation/login_validation.php';

?>
<html>
    <head>
        <meta charset="utf-8">

        <title>Login</title>

        <link rel="stylesheet" href="assets/css/main.css"/>

    </head>
    <body>
        <div class="register_form login_form">
            <form action="<?php dataExport() ?>" method="POST">
                <label for="email">Email</label>
                <input type="text" name="username" placeholder="Email">
                <label for="pass">Password</label>
                <input type="password" name="password" placeholder="Password"><br>
                <input type="submit" name="submit" value="Submit">
                <a class="cancel_btn" href="index.php">Cancel</a>
            </form>
        </div>

    </body>
</html>