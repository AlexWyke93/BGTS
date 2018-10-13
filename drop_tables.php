<?php
/**
 * Created by IntelliJ IDEA.
 * User: minim
 * Date: 09/10/2018
 * Time: 14:26
 */

include("db_functions.php");

$connection = db_connect();

$deleteTables = "DROP TABLE IF EXISTS artists, events, tattoos;";

$result = mysqli_query($connection, $deleteTables);

if (!$result) {
    die("Error in Code: " . mysqli_error($connection));
}
else
{
    echo "Tables Successfully Deleted!!";

}