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

    phpversion();
    require "Db_functions.php";

    $connection = Db_connect();

    $result = Db_query(
        $newTable = "CREATE TABLE tattoos (
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
        );"
    );

    $result = mysqli_query($connection, $newTable);

if (!$result) {
    die("Error in Code: " . mysqli_error($connection));
} else {
    echo "Tattoos Table Created Successfully!!";
}