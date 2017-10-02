<?php
    
    session_start();

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

?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Straw Poll </title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="Question">
        <h1>Question</h1>
        <?php

        ?>
        </div>
    </div>

</body>
</html>