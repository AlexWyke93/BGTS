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
        "CREATE TABLE IF NOT EXISTS artists (
        artistId INT AUTO_INCREMENT PRIMARY KEY NOT NULL UNIQUE,
        artistName VARCHAR(150) NOT NULL,
        artistBio TEXT NOT NULL,
        imageFN VARCHAR(200) NOT NULL
        );"
    );

if (!$result) {
    $error = Db_error();
    echo $error;
} else {
    echo "Artists Table Created Successfully!!";

}