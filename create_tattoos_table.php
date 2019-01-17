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

    require "Db_functions.php";

    $connection = Db_connect();

    $result = Db_query("CREATE TABLE tattoos (
          tattooId INT AUTO_INCREMENT NOT NULL UNIQUE,
          artistId INT NOT NULL,
          tattooTitle VARCHAR(150) NOT NULL,
          addedDate TIMESTAMP NOT NULL,
          tattooDescription TEXT NOT NULL,
          tattootype TEXT NOT NULL,
          imageFN VARCHAR(200) NOT NULL,
          PRIMARY KEY(tattooId),
          FOREIGN KEY(artistId) REFERENCES artists(artistId)
          ON UPDATE CASCADE
          ON DELETE CASCADE
          );"
    );

if (!$result) {
    die("Error in Code: " . mysqli_error($connection));
} else {
    echo "Tattoos Table Created Successfully!!";
}