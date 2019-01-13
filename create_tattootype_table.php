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
        "CREATE TABLE tattootype (
          tattootypeId INT AUTO_INCREMENT PRIMARY KEY NOT NULL UNIQUE,
          tattootype VARCHAR(150) NOT NULL,
          tattootypeDescription TEXT NOT NULL
        );"
    );

if (!$result) {
    die(Db_quote(Db_error($connection)));
} else {
    echo "Tattoo Type Table Created Successfully!!";
}