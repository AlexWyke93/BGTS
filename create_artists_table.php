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

    $result = db_query(
        "CREATE TABLE IF NOT EXISTS artists (
        artistId INT AUTO_INCREMENT PRIMARY KEY NOT NULL UNIQUE,
        artistName VARCHAR(150) NOT NULL,
        artistBio TEXT NOT NULL,
        imageFN VARCHAR(200) NOT NULL
        );"
    );

if (!$result) {
    $error = db_error();
    echo $error;
} else {
    echo "Artists Table Created Successfully!!";

}