<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Edit Event Menu</title>
</head>
<body>
<?php
include 'db_functions.php';

$result = Db_query("SELECT eventId, eventTitle, eventDate, imageFN FROM events;"
);

while ($row=mysqli_fetch_array($result)) {
    echo "<a href='edit_event_form.php?eventId=" . $row['eventId'] . "'>";
        echo "<div>";
            echo "<img src='" . $row['imageFN'] . "' alt='" . $row['eventTitle'] . "'/>";
            echo "<h3>" . $row['eventTitle'] . "</h3>";
        echo "</div>";
    echo "</a>";
}
?>

</body>
</html>