<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Edit Artist</title>
</head>
<body>
<?php
include 'db_functions.php';

$id = $_POST['id'];
$eventName = htmlentities($_POST['eventName']);
$eventDate = htmlentities($_POST['eventDate']);
$eventDesc = htmlentities($_POST['eventDesc']);

try
{
    $result = Db_query(
        "UPDATE events 
                  SET eventTitle='" . $eventName . "', 
                  eventDate='" . $eventDate . "',
                  eventDescription='" . $eventDesc . "'
                  WHERE eventId=" . $id . ";"
    );


    if (!$result) {
        die($error = Db_error());
    } else {
        echo "Event: " . $eventName . " has been edited!!";
    }
}
catch (Exception $e)
{
    echo "Exception has occurred: " . $e->getMessage();
}
?>
</body>
</html>