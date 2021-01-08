<?php
include './assets/src/getdata/getdata_addevent.php';
?>

<html>
    <head>
        <title>Add Event</title>
        <link rel="stylesheet" href="assets/css/main.css"/>
    </head>
    <body>
        <div class="addevent">
            <form action="events.php" method="POST">
                <label class="event_add_text">Име на евента</label>
                <input type="text" class="event_input" name="title">
                <label>Информация за евента</label>
                <textarea class="events_information" name="information" rows="5" cols="10"></textarea>
                <label for="agecontrole">Задължителна възраст:</label>
                <input type="radio" class="event_agecontrol" name="agecontrol" value="Пълнолетни"> 
                <label for="male">Пълнолетни</label>
                <input type="radio" class="event_agecontrol" name="agecontrol" value="Всички" >
                <label for="gender">Всички</label>
                <label>Начален час на събитието</label>
                <input type="time" class="event_input" name="durationstart">
                <label>Краен час на събитието</label>
                <input type="time" class="event_input" name="durationend">
                <input class="btn_event" type="submit" name="submit">
                <a class="cancel_btn" href="index.php">Cancel</a>
            </form>
        </div>
    </body>
</html>


