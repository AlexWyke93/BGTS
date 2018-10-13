<?php

/**
 *
 * @category  php
 * @package  BGTS-BE
 * @author   Alexander Wyke <alexwyke93@gmail.com>
 * @license  none
 * @link     n/a
 */

    require "db_functions.php";

    $result = db_query(
        "INSERT INTO `artists`(
        `artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
        NULL,'Bob Wyke','I am a junior tattoo artist.','test')"
    );
    $result = db_query(
        "INSERT INTO `artists`(
        `artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
        NULL,'Spike','I am a senior tattoo artist.','test')"
    );

if ($result === false) {
    $error = db_error();
} else {
    echo "Inserted Data!!!!";
}