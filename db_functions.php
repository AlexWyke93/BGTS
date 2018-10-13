<?php
/**
 * Created by IntelliJ IDEA.
 * User: minim
 * Date: 30/09/2018
 * Time: 02:18
 */
    function Db_connect()
    {
        static $connection;

        if(!isset($connection)) {
            $config = parse_ini_file('../config.ini');
            $connection = mysqli_connect('localhost', $config['username'], $config['password'], $config['dbname']);
        }

        if ($connection === false) {
            //TODO: Add Error Logging
            return mysqli_connect_error();
        }
        return $connection;
    }

    function Db_query($query) {
        $connection = db_connect();

        $result = mysqli_query($connection, $query);

        return $result;
    }

    function Db_select($query) {
        $rows = array();
        $result = db_query($query);

        if ($result === false)
        {
            return false;
        }

        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function Db_error() {
        $connection = db_connect();
        return mysqli_error($connection);
    }

    function Db_quote($value) {
        $connection = db_connect();

        return "'" . mysqli_real_escape_string($connection, $value) . "'";
    }

