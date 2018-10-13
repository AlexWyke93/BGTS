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

if (!$result) {
    $error = Db_error();
} else {
    echo "Tables Successfully Deleted!!";

}