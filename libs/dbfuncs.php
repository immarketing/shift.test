<?php
/**
 * Created by PhpStorm.
 * User: AlGO
 * Date: 26.10.2015
 * Time: 23:48
 */

function touchDB($mysqli){
    try {
        $stmt = $mysqli->prepare("SHOW TABLES");
    }
    catch (Exception $e) {
        try {
            $mysqli->close ();
        } catch (Exception $e) {

        }
        unset ($mysqli);
        $mysqli = connectDB();
    } finally {

    }
    return $mysqli;
}

function connectDB(){
    $mysqli = new mysqli("localhost", "root", "", "db_shift");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    echo $mysqli->host_info . "\n";

    return $mysqli;

    $mysqli = new mysqli("127.0.0.1", "root", "", "db_shift", 3306);
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    echo $mysqli->host_info . "\n";
}
