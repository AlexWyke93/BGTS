<?php
/**
 * Created by IntelliJ IDEA.
 * User: minim
 * Date: 09/10/2018
 * Time: 14:26
 */

include "Db_functions.php";

$connection = Db_connect();

$result = Db_query(
    "DROP TABLE IF EXISTS artists, events, tattoos;"
);

$result = mysqli_query($connection, $deleteTables);

if (!$result) {
    die("Error in Code: " . mysqli_error($connection));
} else {
    echo "Tables Successfully Deleted!!";

}