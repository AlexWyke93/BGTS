<?php
/**
 * PHP version 7.2
 *
 * @category PHP
 * @package  BGTS-BE
 * @author   Alexander Wyke <alexwyke93@gmail.com>
 * @license  none
 * @link     n/a
 */

    require "db_functions.php";

    $connection = db_connect();

    $result = db_query("CREATE TABLE events 
    (
      eventId INT AUTO_INCREMENT PRIMARY KEY NOT NULL UNIQUE,
      eventTitle VARCHAR(150) NOT NULL,
      eventDate DATETIME NOT NULL,
      eventDescription TEXT NOT NULL,
      addedDate TIMESTAMP NOT NULL,
      imageFN VARCHAR(200) NOT NULL
    );"
    );

    $result = mysqli_query($connection, $newTable);

if (!$result) {
    die(htmlentities(db_quote("Error in Code: " . mysqli_error($connection))));
}
else
{
    echo "Events Table Created Successfully!!";

}