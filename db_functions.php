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

/**
 * @return mysqli|string
 *
 * @function Db_connect()
 */
function Db_connect()
{
    static $connection;

    if (!isset($connection)) {
        $config = parse_ini_file('../config.ini');
        $connection = mysqli_connect('localhost', $config['username'], $config['password'], $config['dbname']);
    }

    if ($connection === false) {
        //TODO: Add Error Logging
        return mysqli_connect_error();
    }
    return $connection;
}

/**
 * @param $query
 *
 * @return bool|mysqli_result
 *
 * @function Db_query()
 */
function Db_query($query)
{
    $connection = Db_connect();

    $result = mysqli_query($connection, $query);

    return $result;
}

/**
 *
 * @function Db_select()
 *
 * @param $query
 *
 * @return array|bool
 */
function Db_select($query)
{
    $rows = array();
    $result = Db_query($query);

    if ($result === false) {
        return false;
    }

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

/**
 * @return string
 *
 * @function Db_error()
 */
function Db_error()
{
    $connection = Db_connect();
    return mysqli_error($connection);
}

/**
 * @param $value
 *
 * @return string
 *
 * @function Db_quote()
 */
function Db_quote($value)
{
    $connection = Db_connect();

    return "'" . mysqli_real_escape_string($connection, $value) . "'";
}

