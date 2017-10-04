<!DOCTYPE html>

<html>
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

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title> Straw Poll </title>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/script.js"></script>
    
</head>
<body>
    <div class="container">
        <div class="Question">
            <h1>Add a question</h1>
            <form>
                <input id="question" type="text" name="question" value="">
                <input type="button" name="Add Question" value="Add Question" onclick="addQuestion()">
            </form>
            <input type="button" onclick="getQuestionList()">
        </div>
    </div>

</body>
</html>