<?php

/**
 * Created by PhpStorm.
 * User: adhoot
 * Date: 04/10/2017
 * Time: 19:14
 *
 * Designed to retun all questions stored in the db in a josn format
 */

//Create Connection to DB

$url = getenv('JAWSDB_URL');
$dbparts = parse_url($url);

$hostname = $dbparts['host'];
$username = $dbparts['user'];
$password = $dbparts['pass'];
$database = ltrim($dbparts['path'],'/');

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//Create SQL to get a list of all questions
$sql = "SELECT * FROM questions";

// Query db with statement
$res = mysqli_query($conn, $sql);

echo json_encode(mysqli_fetch_all($res, MYSQLI_ASSOC));