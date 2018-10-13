<?php
/**
 *
 * PHP version 7.2.10
 *
 * @category PHP
 * @package  BGTS-BE
 * @author   Alexander Wyke <alexwyke93@gmail.com>
 * @license  none
 * @link     n/a
 */

    require "db_functions.php";

    $result = db_query(
        "INSERT INTO `artists`(
        `artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
        NULL,'Sam Wyke','I am a junior tattoo artist.','test')"
    );
    $result = db_query(
        "INSERT INTO `artists`(
        `artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
        NULL,'James','I am a senior tattoo artist.','test')"
    );

if ($result === false) {
    $error = db_error();
} else {
    echo "Inserted Data!!!";
}