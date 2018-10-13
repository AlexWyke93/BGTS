<?php
/**
 * Created by IntelliJ IDEA.
 * User: minim
 * Date: 29/09/2018
 * Time: 21:03
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
    }
    else
    {
        echo "Artists Table Created Successfully!!";
        
    }