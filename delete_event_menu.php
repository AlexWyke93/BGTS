<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Delete Event Menu</title>
</head>
<body>
<form role="form" method="POST" action="delete_event.php">
    <label for="events">Events: </label>
    <select name="events">

        <?php
        include 'db_functions.php';

        $result = Db_query("SELECT eventId, eventTitle FROM events;"
        );

        while ($row=mysqli_fetch_array($result)) {
            echo "<option value=" . $row['eventId'] . ">" . $row['eventTitle'] . "</option>";
        }
        ?>
    </select>

    <input type="submit" value="Submit">
</form>
</body>
</html>