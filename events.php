<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
</head>
<body>
<?php
/**
 * PHP version 7.2.10
 *
 * @category PHP
 * @package  BGTS-BE
 * @author   Alexander Wyke <alexwyke93@gmail.com>
 * @license  none
 * @link     n/a
 */

include 'db_functions.php';

$connection = Db_connect();

$result = Db_query("SELECT * FROM events");


if ($result === false) {
    return false;
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h1>" . $row['eventTitle'] . "</h1>" .
        "<h1>" . $row['eventDate'] . "</h1>" .
        "<h3>" . $row['eventDescription'] . "</h3>" .
        "<p>" . $row['addedDate'] . "</p>" .
        "<img src='" . $row['imageFN'] . "' alt='" . $row['eventTitle'] . "'/>";
}

?>
</body>
</html>