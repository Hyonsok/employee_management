<?php


define("DATABASE_USERNAME", "root");
define("DATABASE_PASSWORD", "");
define("DATABASE_NAME", "employee");
define("DATABASE_URL", "localhost");

$hashFormat = "$2y$10$";
$salt = "iusesomecrazystrings22";

$hash_and_salt = $hashFormat.$salt;


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function sys_db_execute($query) {
    $connection = @mysqli_connect(DATABASE_URL, DATABASE_USERNAME, DATABASE_PASSWORD);
    mysqli_select_db($connection, DATABASE_NAME);
    $querytext = addslashes($query);
    if ($return = @mysqli_query($connection, $query)) {
        return $return;
    }
    mysqli_close($connection);
}