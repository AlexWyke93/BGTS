<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Delete Event</title>
</head>
<body>
<?php
include 'db_functions.php';

$id = $_POST['events'];

try {
    $result = Db_query("DELETE FROM events WHERE eventId=" . $id . ";"
    );
    echo "Event Deleted Successfully!!!";
}
catch (Exception $e)
{
    $e->getMessage();
}
?>
</body>
</html>