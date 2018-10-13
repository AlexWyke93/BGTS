<?php
/**
 * Created by IntelliJ IDEA.
 * User: minim
 * Date: 29/09/2018
 * Time: 21:03
 */

    include "db_functions.php";

    $connection = db_connect();

    $newTable = "CREATE TABLE events 
    (
      eventId INT AUTO_INCREMENT PRIMARY KEY NOT NULL UNIQUE,
      eventTitle VARCHAR(150) NOT NULL,
      eventDate DATETIME NOT NULL,
      eventDescription TEXT NOT NULL,
      addedDate TIMESTAMP NOT NULL,
      imageFN VARCHAR(200) NOT NULL
    );";

    $result = mysqli_query($connection, $newTable);

    if (!$result) {
        die(htmlentities(db_quote("Error in Code: " . mysqli_error($connection))));
    }
    else
    {
        echo "Events Table Created Successfully!!";

    }