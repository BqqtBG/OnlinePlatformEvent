<?php
include './assets/src/application.php';
include './assets/src/getdata/getdata_addevent.php';
?>
<html>
    <head>
        <title>title</title> 
        <link rel="stylesheet" href="assets/css/main.css"/>
    </head>
    <body>
        <div class="logo_background"></div>
        <div class="navi_bar">
            <?php naviBar() ?>
        </div>
        <div class="body_background_events">
            <br>
            <?php AddEventBtn() ?>
        </div>
        <?php
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='body_background_events'>";
                echo "<br>";
                echo "<div class='body_center events'>";

                echo "<div class='event_title'>";
                printf("%s \n", $row["title"]);
                echo "</div>";
                echo "<div class='event_information'>";
                printf("%s \n", $row["information"]);
                echo "</div>";
                echo "<div class='event_years'>";
                printf("%s \n", $row["agecontrol"]);
                echo "</div>";
                echo "<div class='time'>";
                echo "Начало: ";
                printf("%s \n", $row["durationstart"]);
                echo "Край: ";
                printf("%s \n", $row["durationend"]);
                echo "</div>";
                JoinEventBtn();
                echo "</div>";
                echo "</div>";
            }
        }
        ?>

        <?php footer() ?>
    </body>
</html>










