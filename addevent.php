<html>
    <head>
        <title>Add Event</title>
        <link rel="stylesheet" href="assets/css/main.css"/>
    </head>
    <body>
        <form action="" class="add_event">
            <label>Event Title</label>
            <input class="second_add_event" type="text" size="80" name="title" required>
            <label>Event Information</label>
            <textarea class="information_add_event" name="information" maxlength="250" cols="62"></textarea>
            <label>Age Restriction</label>
            <select name="аге" required>
                <option value="18+">18+</option>
                <option value="За всички">За всички</option>
            </select>
            <label>Firstname</label> 
            <input class="second_add_event" type="text" name="firstname" size="30" required>
            <label>Secondname</label> 
            <input class="second_add_event" type="text" name="secondname" size="30" required>
            <input type="submit" name="submit">
            <a class="cancel_btn" href="events.php">Cancel</a>
        </form>
    </body>
</html>
