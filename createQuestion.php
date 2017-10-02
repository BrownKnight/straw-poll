<?php
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
    echo "Connection was successfully established!";

    $question = $_REQUEST['questionText'];
    echo $question;

    $sql = 'INSERT INTO questions (question_id, question) VALUES (5, "'.$question.'")';

    $res = mysqli_query($conn, $sql);

    if ($res === FALSE) {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);

?>