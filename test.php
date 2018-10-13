<?php
/**
 * Created by IntelliJ IDEA.
 * User: minim
 * Date: 13/10/2018
 * Time: 03:55
 */

    require "db_functions.php";

    $result = db_query("INSERT INTO `artists`(`artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
                                NULL,'Bob Wyke','I am a junior tattoo artist.','test')"
                                );
    $result = db_query("INSERT INTO `artists`(`artistId`, `artistName`, `artistBio`, `imageFN`) VALUES (
                                 NULL,'Spike','I am a senior tattoo artist.','test')"
                                );

    if ($result === false){
        $error = db_error();
    }
    else
    {
        echo "Inserted Data!!!!";
    }