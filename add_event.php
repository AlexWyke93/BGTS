<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
</head>
<body>
<?php
include 'db_functions.php';

$eventName = htmlentities($_POST['eventName']);
$eventDate = htmlentities($_POST['eventDate']);
$eventTime = htmlentities($_POST['eventTime']);
$eventDesc = htmlentities($_POST['eventDesc']);

include 'upload.php';

$path = "Uploads/" . $_FILES['uploaded_file']['name'];

$result = Db_query("INSERT INTO events VALUES (
NULL, '$eventName', '$eventDate', '$eventTime', '$eventDesc', NULL, '$path'
)"
);

if (!$result) {
    die($error = Db_error());
} else {
    echo "<h3>Record Added!!!!</h3>";
}
?>
</body>
</html>