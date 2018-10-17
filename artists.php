<!DOCTYPE html>
<html>
<head>
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

$result = Db_query("SELECT * FROM artists");


if ($result === false) {
    return false;
}

while ($row = mysqli_fetch_assoc($result)) {
    echo "<h1>" . $row['artistName'] . "</h1>" .
        "<h3>" . $row['artistBio'] . "</h3>" .
        "<img src='" . $row['imageFN'] . "' alt='" . $row['artistName'] . "\'s" . "Avatar' />";
}

?>
</body>
</html>