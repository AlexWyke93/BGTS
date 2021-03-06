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

    $result = Db_query(
        "CREATE TABLE IF NOT EXISTS events 
        (
          eventId INT AUTO_INCREMENT NOT NULL UNIQUE,
          eventTitle VARCHAR(150) NOT NULL,
          eventDate DATETIME NOT NULL,
          eventDescription TEXT NOT NULL,
          addedDate TIMESTAMP NOT NULL,
          imageFN VARCHAR(200) NOT NULL,
          PRIMARY KEY(eventId)
        );"
    );

    $result = Db_query(
        "CREATE TABLE IF NOT EXISTS artists 
        (
          artistId INT AUTO_INCREMENT NOT NULL UNIQUE,
          artistName VARCHAR(150) NOT NULL,
          artistBio TEXT NOT NULL,
          imageFN VARCHAR(200) NOT NULL,
          PRIMARY KEY(artistId)
        );"
    );

    $result = Db_query(
        "CREATE TABLE IF NOT EXISTS tattoos (
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
    echo "Tables Created Successfully!!";
}