<?php
/**
 * Created by IntelliJ IDEA.
 * User: minim
 * Date: 29/09/2018
 * Time: 21:03
 */
    /*ini_set('display_errors',1);
    error_reporting(E_ALL);*/

    phpversion();
    require "db_functions.php";

    $connection = db_connect();

    $newTable = "CREATE TABLE tattoos 
    (
      tattooId INT AUTO_INCREMENT NOT NULL UNIQUE,
      artistId INT NOT NULL UNIQUE,
      tattooTitle VARCHAR(150) NOT NULL,
      addedDate TIMESTAMP NOT NULL,
      tattooDescription TEXT NOT NULL,
      tattooType VARCHAR(150) NOT NULL,
      imageFN VARCHAR(200) NOT NULL,
      PRIMARY KEY(tattooId),
      FOREIGN KEY(artistId) REFERENCES artists(artistId)
      ON UPDATE CASCADE
      ON DELETE CASCADE 
    );";

    $result = mysqli_query($connection, $newTable);

    if (!$result) {
        die("Error in Code: " . mysqli_error($connection));
    }
    else
    {
        echo "Tattoos Table Created Successfully!!";
    }