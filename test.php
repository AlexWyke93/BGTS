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

    $result = Db_query(
        "INSERT INTO `artists`(
        `artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
        NULL,'Sam Wyke','I am a junior tattoo artist.','test')"
    );
    $result = Db_query(
        "INSERT INTO `artists`(
        `artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
        NULL,'James','I am a senior tattoo artist.','test')"
    );

if ($result === false) {
    $error = Db_error();
} else {
    echo "Inserted Data!!!";
}